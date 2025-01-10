<?php

namespace App\Http\Controllers;

use App\Models\PropertyListing;
use App\Models\RegisterCompany;
use Illuminate\Http\Request;
use App\Models\Master;
use Exception;
use Illuminate\Support\Facades\Log;
use Auth;
use Illuminate\Support\Facades\Hash;

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

    public function updatemyprofile(Request $request)
    {
        // dd($request->all());
        try {
            $user = auth()->user();
            $filenameprofileimage = "";
            if ($request->hasFile('myprofileimage')) {
                $request->validate([
                    'myprofileimage' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                ]);
                $profileimage = $request->file('myprofileimage');
                $filenameprofileimage = time() . '_' . $profileimage->getClientOriginalName();
                $profileimage->move(public_path('assets/images/'), $filenameprofileimage);
            }

            if (Hash::check($request->oldpassword, $user->password)) {
                // Update user's password
                $udpatedpassword = $user->password = Hash::make($request->newpassword);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_photo_path' => $filenameprofileimage == null ? $user->profile_photo_path : $filenameprofileimage,
                'website_link' => $request->websitelink,
                'fulladdress' => $request->fulladdress,
                'password' => $udpatedpassword ?? $user->password,
            ]);

            return back()->with('success', "Profile Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function insertlisting(Request $request)
    {
        //dd($request->all());
        $authuser = auth()->user();
        $datareq = $request->all();

        try {
            // Handle the thumbnail image
            $thumbnailFilename = null;
            if ($request->hasFile('thumbnailImages')) {
                $request->validate([
                    'thumbnailImages' => 'required|mimes:jpeg,png,jpg',
                ]);
               
                $file = $request->file('thumbnailImages');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Listings'), $thumbnailFilename);
            }
            // dd($thumbnailFilename);

            // Handle multiple gallery images
            $galleryImages = [];
            if ($request->hasFile('galleryImages')) {
                $request->validate([
                    'galleryImages.*' => 'required|image|mimes:jpeg,png,jpg',
                ]);
                $files = $request->file('galleryImages');
                foreach ($files as $file) {
                    $imageName = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $imageFullName = $imageName . '.' . $extension;

                    // Define the upload path
                    $uploadedPath = public_path('assets/images/Listings');

                    // Move the file to the desired location
                    $file->move($uploadedPath, $imageFullName);

                    // Store the path for the image
                    $galleryImages[] = 'assets/images/Listings/' . $imageFullName;
                }
            //    dd( $galleryImages);
            }

            // Handle multiple documents
            $documents = [];
            if ($request->hasFile('documents')) {
                $request->validate([
                    'documents.*' => 'required|mimes:pdf',
                ]);

                $files = $request->file('documents');
                foreach ($files as $file) {
                    $documentname = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $documentfullname = $documentname . '.' . $extension;
                    $uploadedPath = public_path('assets/images/Listings');
                    $file->move($uploadedPath, $documentfullname);
                    $documents[] = 'assets/images/Listings/' . $documentfullname;
                }
                // dd($documents);
            }

            // Create the property listing
            $data = PropertyListing::create([
                'usertype' => 'Admin',
                'roleid' => $authuser->id,
                'property_name' => $datareq['property_name'],
                'discription' => strip_tags($datareq['description'] ?? ''), // Remove HTML tags
                'price' => $datareq['price'],
                'squarefoot' => $datareq['sqfoot'],
                'bedroom' => $datareq['bedroom'],
                'bathroom' => $datareq['bathroom'],
                'floor' => $datareq['floor'],
                'city' => $datareq['city'],
                'address' => $datareq['officeaddress'],
                'thumbnail' => $thumbnailFilename,
                'category' => $datareq['category'],
                'gallery' => json_encode($galleryImages),
                'documents' => json_encode($documents),
                'status' => $datareq['status'],
            ]);

            return response()->json(['data' => $data, 'message' => 'Listing inserted successfully!']);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }

    public function updatelisting(Request $request)
    {
        //dd($request->all());
        $authuser = auth()->user();
        $datareq = $request->all();

        try {
            // Handle the thumbnail image
            $thumbnailFilename = null;
            if ($request->hasFile('thumbnailImages')) {
                $request->validate([
                    'thumbnailImages' => 'required|mimes:jpeg,png,jpg',
                ]);
               
                $file = $request->file('thumbnailImages');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Listings'), $thumbnailFilename);
            }
            // dd($thumbnailFilename);

            // Handle multiple gallery images
            $galleryImages = [];
            if ($request->hasFile('galleryImages')) {
                $request->validate([
                    'galleryImages.*' => 'required|image|mimes:jpeg,png,jpg',
                ]);
                $files = $request->file('galleryImages');
                foreach ($files as $file) {
                    $imageName = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $imageFullName = $imageName . '.' . $extension;

                    // Define the upload path
                    $uploadedPath = public_path('assets/images/Listings');

                    // Move the file to the desired location
                    $file->move($uploadedPath, $imageFullName);

                    // Store the path for the image
                    $galleryImages[] = 'assets/images/Listings/' . $imageFullName;
                }
            //    dd( $galleryImages);
            }

            // Handle multiple documents
            $documents = [];
            if ($request->hasFile('documents')) {
                $request->validate([
                    'documents.*' => 'required|mimes:pdf',
                ]);

                $files = $request->file('documents');
                foreach ($files as $file) {
                    $documentname = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $documentfullname = $documentname . '.' . $extension;
                    $uploadedPath = public_path('assets/images/Listings');
                    $file->move($uploadedPath, $documentfullname);
                    $documents[] = 'assets/images/Listings/' . $documentfullname;
                }
                // dd($documents);
            }


            $olddata = RegisterCompany::find($request->listingid);
            // Create the property listing
            $data = PropertyListing::where('id',$request->listingid)->update([
                'usertype' => 'Admin',
                'roleid' => $authuser->id,
                'property_name' => $datareq['property_name'],
                'discription' => strip_tags($datareq['description'] ?? ''), // Remove HTML tags
                'price' => $datareq['price'],
                'squarefoot' => $datareq['sqfoot'],
                'bedroom' => $datareq['bedroom'],
                'bathroom' => $datareq['bathroom'],
                'floor' => $datareq['floor'],
                'city' => $datareq['city'],
                'address' => $datareq['officeaddress'],
                'thumbnail' => $thumbnailFilename ?? $olddata->thumbnail,
                'category' => $datareq['category'],
                'gallery' => !empty($galleryImages) ? json_encode($galleryImages) : $olddata->gallery, 
                'documents' => !empty($documents) ? json_encode($documents) : $olddata->documents,
                'status' => $datareq['status'],
            ]);

            return response()->json(['data' => $data, 'message' => 'Listing Updated..!']);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
}
