<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Exception;
use App\Models\Master;
use App\Models\PropertyListing;
class UserViews extends Controller
{
    public function dashboard(){
        $authuser = Auth::guard('customer')->user();
        $allproperties = PropertyListing::where('roleid',$authuser->id)->orderBy('created_at', 'DESC')->get();
        $mylistingscnt = PropertyListing::where('roleid',$authuser->id)->count();
        return view('UserPanelPages.dashboard', compact('allproperties', 'mylistingscnt'));
    }

    public function logoutuserpanel()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('website.userlogin');
    }

    public function myprofile(){
        $userdata = Auth::guard('customer')->user();
        return view('UserPanelPages.myprofile', compact('userdata'));
    }

    public function updateuserprofile(Request $request)
    {
        // dd($request->all());
        try {
            $user = Auth::guard('customer')->user();
            $filenameprofileimage = "";
            if ($request->hasFile('myprofileimage')) {
                $request->validate([
                    'myprofileimage' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $profileimage = $request->file('myprofileimage');
                $filenameprofileimage = time() . '_' . $profileimage->getClientOriginalName();
                $profileimage->move(public_path('assets/images/Users'), $filenameprofileimage);
            }


            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'companyname' => $request->companyname,
                'profile_photo_path' => $filenameprofileimage == null ? $user->profile_photo_path : $filenameprofileimage,
            ]);

            return back()->with('success', "Profile Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function mylistings()
    {
        $authuser = Auth::guard('customer')->user();
        $allproperties = PropertyListing::where('roleid',$authuser->id)->orderBy('created_at', 'DESC')->get();
        $allpropertiescnt = PropertyListing::where('roleid',$authuser->id)->count();
        return view('UserPanelPages.mylistings', compact('allproperties', 'allpropertiescnt', 'authuser'));
    }

    public function addlisting()
    {
        $categories = Master::where('type', 'Property Categories')->get();
        return view('UserPanelPages.addproperty', compact('categories'));
    }

    public function insertuserlisting(Request $request)
    {
        //dd($request->all());
        $authuser = Auth::guard('customer')->user();
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
                    'documents.*' => 'required|mimes:pdf,jpeg,jpg',
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
                'usertype' =>  ucfirst($authuser->user_type),
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

    public function viewlisting($id)
    {
        $listingdata = PropertyListing::find($id);
        $propertyName = $listingdata->property_name;
        return view('UserPanelPages.viewlisting', compact('listingdata', 'propertyName'));
    }

    public function editlisting($id)
    {
        // dd($id);
        $listingdata = PropertyListing::find($id);
        $categories = Master::where('type', 'Property Categories')->get();
        return view('UserPanelPages.editlisting', compact('listingdata', 'categories'));
    }

    public function updateuserlisting(Request $request)
    {
        //dd($request->all());
        $authuser = Auth::guard('customer')->user();
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
                    'documents.*' => 'required|mimes:pdf,jpeg,jpg',
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


            $olddata = PropertyListing::find($request->listingid);
            // dd($olddata);
            // Create the property listing
            $data = PropertyListing::where('id', $request->listingid)->update([
                'usertype' =>  ucfirst($authuser->user_type),
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

    public function deletelisting($id)
    {
        try {
            $data = PropertyListing::find($id);
            $data->delete();
            return back()->with('success', "Listing Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function updateaduserlistingstatus(Request $request)
    {
        $lisdata = PropertyListing::find($request->id);
        if ($lisdata) {
            $lisdata->status = $request->status;
            $lisdata->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

}
