<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Master;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use Hash;
use Http;
use Auth;
class WebsiteStores extends Controller
{
    public function sendenquiry(Request $rq)
    {
        try {
            $validator = Validator::make($rq->all(), [
                'g-recaptcha-response' => 'required',
            ]);

            // Verify Google reCAPTCHA v3
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $rq->input('g-recaptcha-response'),
            ]);
            $captchaData = $response->json();


            if (!$captchaData['success'] || $captchaData['score'] < 0.5) {
                return back()->with('error', 'reCAPTCHA verification failed. Please try again.')->withInput();
            }
            $attributes = Lead::create([
                'name' => $rq->customername,
                'mobilenumber' => $rq->phone,
                'email' => $rq->email,
                'city' => $rq->city,
                'state' => $rq->state,
                'housecategory' => $rq->propertytype,
                'inwhichcity' => $rq->cityofproperty,
                'propertyid' => $rq->propertyid,
                'userid' => $rq->userid,
            ]);
            return back()->with('success', "Enquiry Sent..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function registeruser(Request $request)
    {
        try {
            // Validate all input fields including reCAPTCHA
            $validator = Validator::make($request->all(), [
                'g-recaptcha-response' => 'required',
                'email' => 'required|email|unique:register_users',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            // Verify Google reCAPTCHA v3
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $request->input('g-recaptcha-response'),
            ]);

            $captchaData = $response->json();

            if (!$captchaData['success'] || $captchaData['score'] < 0.5) {
                return back()->with('error', 'reCAPTCHA verification failed. Please try again.')->withInput();
            }

            // Handle file upload if present
            $thumbnailFilename = null;
            if ($request->hasFile('company_document')) {
                $file = $request->file('company_document');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Users'), $thumbnailFilename);
            }

            // Create user record
            RegisterUser::create([
                'user_type' => $request->input('user_type'),
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'company_name' => $request->company_name,
                'company_document' => $thumbnailFilename,
                'password' => Hash::make($request->password),
            ]);

            return back()->with('success', 'You have been registered successfully!');

        } catch (Exception $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }


    public function loginuser(Request $rq)
    {
        try {
             // Validate all input fields including reCAPTCHA
             $validator = Validator::make($rq->all(), [
                'g-recaptcha-response' => 'required',
            ]);
            $user = RegisterUser::where('email', $rq->email)->first();
            
            // Verify Google reCAPTCHA v3
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET'),
                'response' => $rq->input('g-recaptcha-response'),
            ]);

            $captchaData = $response->json();

            if (!$captchaData['success'] || $captchaData['score'] < 0.5) {
                return back()->with('error', 'reCAPTCHA verification failed. Please try again.')->withInput();
            }
            if ($user) {
                if (Hash::check($rq->password, $user->password)) {
                    Auth::guard('customer')->login($user);
                    if (Auth::guard('customer')->check()) {
                        $user->verification_status = 1;
                        $user->save();
                        return redirect('/');
                    } else {
                        return back()->with('error', "Invalid Credentials..!!!");
                    }
                } else {
                    return back()->with('error', "Invalid Password..!!!");
                }
            } else {
                return back()->with('error', "Invalid Email..!!!");
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updatePassword(Request $rq)
    {
        try {
            $user = RegisterUser::where('email', $rq->email)->first();
            if ($user) {
                $user->password = Hash::make($rq->password);
                $user->save();
                return back()->with('success', "Password Updated Successfully..!!!");
            } else {
                return back()->with('error', "Invalid Email..!!!");
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
