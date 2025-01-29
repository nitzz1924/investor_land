<?php
#{{-------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------- --}}
namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Hash;
use Exception;
class GoogleAuthentication extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function GoogleAuth()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = RegisterUser::where('google_id', $googleUser->id)->first();

            if ($user) {
                Auth::guard('customer')->login($user);
                return redirect()->route('user.dashboard');
            } else {
                $this->googleRegistrationRedirects('default_type');
                return redirect()->route('website.userlogin')->with('error', 'This User is not registered');

            }
        } catch (Exception $exception) {
            return redirect()->route('website.userlogin')->with('error', 'Something went wrong');
        }
    }

    public function googleRegistrationRedirects($usertype)
    {
        session(['google_register_usertype' => $usertype]);
        return Socialite::driver('google')->redirectUrl(config('services.google.register'))->redirect();
    }

    public function GoogleRegister()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $usertype = session('google_register_usertype', 'default_type'); 

            $user = RegisterUser::where('email', $googleUser->email)->first();

            if ($user) {
                return redirect()->route('website.registration')->with('error', 'User already Exits');
            } else {
                $newUser = RegisterUser::create([
                    'name' => $googleUser->name,
                    'user_type' => $usertype,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'profile_photo_path' => $googleUser->avatar ?? 'public/assets/images/defaultuser.png',
                    'password' => Hash::make('12345678'),   
                ]);
                if ($newUser) {
                    return redirect()->route('website.userlogin')->with('success', 'Registered Successfully');
                }
            }
        } catch (Exception $exception) {
            return redirect()->route('website.registration')->with('error', 'Something went wrong');
        }
    }
}
