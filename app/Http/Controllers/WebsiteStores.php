<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Master;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Exception;
use Hash;
use Auth;
class WebsiteStores extends Controller
{
    public function sendenquiry(Request $rq)
    {
        try {
            $attributes = Lead::create([
                'name' => $rq->customername,
                'mobilenumber' => $rq->phone,
                'email' => $rq->email,
                'city' => $rq->city,
                'state' => $rq->state,
                'housecategory' => $rq->propertytype,
                'inwhichcity' => $rq->cityofproperty,
                'propertyid' => $rq->propertyid,
                'userid' =>  $rq->userid,
            ]);
            return back()->with('success', "Enquiry Sent..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function registeruser(Request $rq)
    {
       
        $thumbnailFilename = null;
        try {
            if ($rq->hasFile('company_document')) {
                $rq->validate([
                    'company_document' => 'required|mimes:jpeg,pdf,jpg',
                ]);

                $file = $rq->file('company_document');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Users'), $thumbnailFilename);
            }
            // dd($thumbnailFilename);
            $attributes = RegisterUser::create([
                'user_type' => $rq->user_type,
                'name' => $rq->name,
                'mobile' => $rq->mobile,
                'email' => $rq->email,
                'company_name' => $rq->company_name,
                'company_document' => $thumbnailFilename,
                'password' => Hash::make($rq->password),
            ]);
            return back()->with('success', "You have been Registered Successfully..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function loginuser(Request $rq)
    {
        try {
            $user = RegisterUser::where('email', $rq->email)->first();
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

    public function updatePassword(Request $rq){
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
