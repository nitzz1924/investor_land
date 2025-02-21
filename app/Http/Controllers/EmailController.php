<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;
use Log;
class EmailController extends Controller
{
    public function sendMail(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
        ]);
        
        try{
            $registeredUser = RegisterUser::where('email', $request->input('email'))->first();
            if(!$registeredUser){
                return back()->with('error', 'Email not found!');
            }else{
                $toEmail = $request->input('email');
                $subject = "Reset Password";
                $message = "This is the mail for Resetting the password";
                // dd('$registeredUser');
        
                // Send email via Laravel Mail
                $encryptedEmail = encrypt($toEmail);
                // dd( $encryptedEmail);
                Mail::to($toEmail)->send(new ResetPasswordMail($message, $subject, $encryptedEmail));
                return redirect()->back()->with('success', 'Reset Link has been sent to your email!');
            }
            
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return back()->with('error', 'This Email is not regisetered');
        }

    }
}
