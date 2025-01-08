<?php

namespace App\Http\Controllers;

use App\Models\RegisterCompany;
use Illuminate\Http\Request;
use App\Models\Master;
use Exception;
class AdminStores extends Controller
{

    public function createmaster(Request $rq)
    {
        // dd($rq->all());
        try {
            $attributes = Master::create([
                'type' => $rq->type == 'Master' ? 'Master' : $rq->type,
                'label' => $rq->label,
            ]);

            return back()->with('success', "Category Added..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function deletemaster($id)
    {
        try {
            $data = Master::find($id);
            $data->delete();
            return back()->with('success', "Category Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updatemaster(Request $rq)
    {
        try {
            $data = Master::find($rq->masterid);
            $data->type = $rq->type;
            $data->label = $rq->label;
            $data->save();
            return back()->with('success', "Category Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function addcompanydetails(Request $request)
    {
        try {
            if ($request->hasFile('companylogo')) {
                $request->validate([
                    'companylogo' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $companylogo = $request->file('companylogo');
                $filenamecompanylogo = time() . '_' . $companylogo->getClientOriginalName();
                $companylogo->move(public_path('assets/images/Services'), $filenamecompanylogo);
            }
            if ($request->hasFile('registrationimage')) {
                $request->validate([
                    'registrationimage' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $registrationimage = $request->file('registrationimage');
                $filenameregistrationimage = time() . '_' . $registrationimage->getClientOriginalName();
                $registrationimage->move(public_path('assets/images/Services'), $filenameregistrationimage);
            }
            if ($request->hasFile('pancardimage')) {
                $request->validate([
                    'pancardimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $pancardimage = $request->file('pancardimage');
                $filenamepancardimage = time() . '_' . $pancardimage->getClientOriginalName();
                $pancardimage->move(public_path('assets/images/Services'), $filenamepancardimage);
            }
            $data = RegisterCompany::create([
                'companyname' => $request->companyname,
                'companylogo' => $filenamecompanylogo,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pincode' => $request->pincode,
                'contactnumber' => $request->contactnumber,
                'email' => $request->email,
                'officeaddress' => $request->officeaddress,
                'registrationimage' => $filenameregistrationimage,
                'pancardimage' => $filenamepancardimage,
            ]);
            //dd($data);
            return back()->with('success', "Company Registered..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function updateregistercompany(Request $request)
    {
        try {
            if ($request->hasFile('companylogo')) {
                $request->validate([
                    'companylogo' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $companylogo = $request->file('companylogo');
                $filenamecompanylogo = time() . '_' . $companylogo->getClientOriginalName();
                $companylogo->move(public_path('assets/images/Services'), $filenamecompanylogo);
            }
            if ($request->hasFile('registrationimage')) {
                $request->validate([
                    'registrationimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $registrationimage = $request->file('registrationimage');
                $filenameregistrationimage = time() . '_' . $registrationimage->getClientOriginalName();
                $registrationimage->move(public_path('assets/images/Services'), $filenameregistrationimage);
            }
            if ($request->hasFile('pancardimage')) {
                $request->validate([
                    'pancardimage' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $pancardimage = $request->file('pancardimage');
                $filenamepancardimage = time() . '_' . $pancardimage->getClientOriginalName();
                $pancardimage->move(public_path('assets/images/Services'), $filenamepancardimage);
            }
            $data = RegisterCompany::where('id', $request->recordid)->update([
                'companyname' => $request->companyname,
                'companylogo' => $filenamecompanylogo ?? RegisterCompany::find($request->recordid)->companylogo,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pincode' => $request->pincode,
                'contactnumber' => $request->contactnumber,
                'email' => $request->email,
                'officeaddress' => $request->officeaddress,
                'registrationimage' => $filenameregistrationimage ?? RegisterCompany::find($request->recordid)->registrationimage,
                'pancardimage' => $filenamepancardimage ?? RegisterCompany::find($request->recordid)->pancardimage,
            ]);

            //dd($data);

            return back()->with('success', "Details Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
}
