<?php

namespace App\Http\Controllers;

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
            $toEmail = $request->input('email');
            $subject = "Reset Password";
            $message = "This is the mail for Resetting the password";
    
            // Send email via Laravel Mail
            Mail::to($toEmail)->send(new ResetPasswordMail($message, $subject));
            
            // dd('success', 'Reset password link sent successfully!');
        }catch(\Exception $e){
            Log::error($e->getMessage());
            return back()->with('error', 'Something went wrong!');
        }

    }
}
