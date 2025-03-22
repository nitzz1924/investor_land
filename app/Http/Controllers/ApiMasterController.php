<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;
use Auth, Hash, Exception;
use App\Models\Blog;
use App\Models\Lead;
use App\Models\Nortification;
use App\Models\PropertyListing;
use App\Models\Master;
use Log;
use Laravel\Socialite\Facades\Socialite;
use Google_Client;


class ApiMasterController extends Controller
{
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

                        // Generate API token for authentication
                        $token = $user->createToken('AuthToken')->plainTextToken;
                        $response = [
                            'success' => true,
                            'token' => $token,
                            'data' => $user,
                            'message' => 'Login Successfully..!!!!!'
                        ];
                    } else {
                        $response = [
                            'success' => false,
                            'message' => 'Invalid..!!!!!'
                        ];
                    }
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Invalid Password..!!!'
                    ];
                }
            } else {
                $response = [
                    'success' => false,
                    'message' => 'Invalid Email..!!!'
                ];
            }
        } catch (Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }

        return response()->json($response);
    }

    public function registeruser(Request $rq)
    {
        $thumbnailFilename = null;
    
        try {
            // Check if email already exists
            if (RegisterUser::where('email', $rq->email)->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'This email is already registered. Please use a different email or log in.'
                ], 400);
            }
    
            if ($rq->hasFile('company_document')) {
                $rq->validate([
                    'company_document' => 'required|mimes:jpeg,pdf,jpg',
                ]);
    
                $file = $rq->file('company_document');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Users'), $thumbnailFilename);
            }
    
            $attributes = RegisterUser::create([
                'user_type' => $rq->user_type,
                'name' => $rq->name,
                'mobile' => $rq->mobile,
                'email' => $rq->email,
                'company_name' => $rq->company_name,
                'company_document' => $thumbnailFilename,
                'password' => Hash::make($rq->password),
                'profile_photo_path' => '/defaultuser.png',
            ]);
    
            return response()->json([
                'success' => true,
                'message' => 'You have been Registered Successfully..!!!',
                'data' => $attributes
            ]);
    
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Registration failed: ' . $e->getMessage()
            ], 500);
        }
    }


    public function blogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return response()->json([
            'success' => true,
            'data' => $blogs
        ]);
    }

    public function propertylistings(Request $req)
    {
        $category = $req->query('filtercategory');
        $city = $req->query('filtercity');
        $minprice = $req->query('filterminprice');
        $maxprice = $req->query('filtermaxprice');

        $listings = PropertyListing::query();

        if ($category) {
            $listings->where('category', $category);
        }

        if ($city) {
            $listings->where('city', $city);
        }

        if ($minprice) {
            $listings->where('price', '>=', $minprice);
        }

        if ($maxprice) {
            $listings->where('price', '<=', $maxprice);
        }

        $listings = $listings->where('status', '=', 'published')->paginate(4);

        return response()->json([
            'success' => true,
            'data' => $listings
        ]);
    }

    public function getcategories()
    {
        $categories = Master::where('type', 'Property Categories')->get();
        return response()->json([
            'success' => true,
            'categories' => $categories
        ]);
    }

    public function propertydetails($id)
    {
        // $categories = Master::where('type', 'Property Categories')->get();
        $propertydetails = PropertyListing::find($id);
        // $propertyName = $propertydetails->property_name;
        return response()->json([
            'success' => true,
            // 'categories' => $categories,
            'details' => $propertydetails,
        ]);
    }

    public function insertlisting(Request $request)
    {
        $datareq = $request->all();
        // \Log::info('Received Data:', $request->all());
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

            // Handle Master Plan Document
            $masterdoc = null;
            if ($request->hasFile('masterplandocument')) {
                $request->validate([
                    'masterplandocument' => 'required|mimes:pdf,jpeg,jpg',
                ]);

                $file = $request->file('masterplandocument');
                $masterdoc = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Listings'), $masterdoc);
            }

            // \Log::info("Received Gallery Images", ['files' => $request->file('galleryImages')]);

            // Handle multiple gallery images
            $galleryImages = [];
            if ($request->hasFile('galleryImages')) {
                $request->validate([
                    'galleryImages.*' => 'required|image|mimes:jpeg,png,jpg',
                ]);
                foreach ($request->file('galleryImages') as $file) {
                    $imageName = md5(rand(1000, 10000)) . '.' . strtolower($file->getClientOriginalExtension());
                    $file->move(public_path('assets/images/Listings'), $imageName);
                    $galleryImages[] = 'assets/images/Listings/' . $imageName;
                }
            } else {
                // \Log::info("🚨 No gallery images detected in request.");
            }


            // Handle multiple documents
            $documents = [];
            if ($request->hasFile('documents')) {
                $request->validate([
                    'documents.*' => 'required|mimes:pdf,jpeg,jpg',
                ]);
                foreach ($request->file('documents') as $file) {
                    $docName = md5(rand(1000, 10000)) . '.' . strtolower($file->getClientOriginalExtension());
                    $file->move(public_path('assets/images/Listings'), $docName);
                    $documents[] = 'assets/images/Listings/' . $docName;
                }
            }

            // Handle multiple videos
            $Videos = [];
            if ($request->hasFile('propertyvideos')) {
                $request->validate([
                    'propertyvideos.*' => 'required|mimes:mp4,mov,avi',
                ]);
                foreach ($request->file('propertyvideos') as $file) {
                    $videoName = md5(rand(1000, 10000)) . '.' . strtolower($file->getClientOriginalExtension());
                    $file->move(public_path('assets/images/Listings'), $videoName);
                    $Videos[] = 'assets/images/Listings/' . $videoName;
                }
            }

            // Create the property listing (Ensure all fields are checked)
            $data = PropertyListing::create([
                'usertype' => $datareq['usertype'] ?? "agent",
                'roleid' => $datareq['roleid'] ?? "4",
                'property_name' => $datareq['property_name'] ?? "",
                'nearbylocation' => $datareq['nearbylocation'] ?? "",
                'approxrentalincome' => $datareq['approxrentalincome'],
                'discription' => strip_tags($datareq['description'] ?? ""), // Remove HTML tags
                'price' => $datareq['price'] ?? "",
                'pricehistory' => json_encode(is_string($datareq['historydate']) ? json_decode($datareq['historydate'], true) : ($datareq['historydate'] ?? [])),
                'squarefoot' => $datareq['sqfoot'] ?? "",
                'bedroom' => $datareq['bedroom'] ?? "",
                'bathroom' => $datareq['bathroom'] ?? "",
                'floor' => $datareq['floor'] ?? "",
                'city' => $datareq['city'] ?? "",
                'address' => $datareq['officeaddress'] ?? "",
                'thumbnail' => $thumbnailFilename,
                'masterplandoc' => $masterdoc,
                'maplocations' => $datareq['location'] ?? ["Latitude" => "", "Longitude" => ""],
                'category' => $datareq['category'] ?? "",
                'gallery' => json_encode($galleryImages),
                'documents' => json_encode($documents),
                'amenties' => $datareq['amenities'] ?? [],
                'videos' => json_encode($Videos),
                'status' => "unpublished",
            ]);

            return response()->json(['data' => $data, 'message' => 'Listing inserted successfully!']);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }


    public function filterlistings(Request $req)
    {
        $category = $req->query('filtercategory');
        $city = $req->query('filtercity');
        $minprice = $req->query('filterminprice');
        $maxprice = $req->query('filtermaxprice');
        $sqftfrom = $req->query('sqftfrom');
        $sqftto = $req->query('sqftto');


        Log::info('Filters:', [
            'category' => $category,
            'city' => $city,
            'minprice' => $minprice,
            'maxprice' => $maxprice,
            'sqftfrom' => $sqftfrom,
            'sqftto' => $sqftto,
        ]);


        $listings = PropertyListing::query();

        if ($category) {
            $listings->where('category', $category)->orWhere('category', 'all');
        }

        if ($city) {
            $listings->where('city', $city);
        }

        if ($minprice && $maxprice) {
            $listings->whereBetween('price', [$minprice, $maxprice]);
        } elseif ($minprice) {
            $listings->where('price', '>=', $minprice);
        } elseif ($maxprice) {
            $listings->where('price', '<=', $maxprice);
        }

        if ($sqftfrom && $sqftto) {
            $listings->whereBetween('squarefoot', [$sqftfrom, $sqftto]);
        } elseif ($sqftfrom) {
            $listings->where('squarefoot', '>=', $sqftfrom);
        } elseif ($sqftto) {
            $listings->where('squarefoot', '<=', $sqftto);
        }
        $listings = $listings->where('status', '=', 'published')->get();

        return response()->json([
            'success' => true,
            'data' => $listings
        ]);
    }

    public function sendenquiry(Request $rq)
    {
        try {
            $data = Lead::create([
                'name' => $rq->customername,
                'mobilenumber' => $rq->phone,
                'email' => $rq->email,
                'city' => $rq->city,
                'state' => $rq->state,
                'housecategory' => $rq->propertytype,
                'propertyid' => $rq->propertyid,
                'userid' => $rq->userid,
            ]);
            return response()->json(['success' => true, 'data' => $data, 'message' => 'Enquiry Sent..!!!']);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function userprofile(Request $rq)
    {
        $userprofiledata = RegisterUser::find($rq->id);
        return response()->json(['success' => true, 'data' => $userprofiledata]);
    }

    public function updateuserprofile(Request $request, $id)
    {
        try {
            $user = RegisterUser::find($id);
            $filenameprofileimage = "";
            $thumbnailFilename = null;

            if ($request->hasFile('myprofileimage')) {
                $request->validate([
                    'myprofileimage' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);
                $profileimage = $request->file('myprofileimage');
                $filenameprofileimage = time() . '_' . $profileimage->getClientOriginalName();
                $profileimage->move(public_path('assets/images/Users'), $filenameprofileimage);
            }

            if ($request->hasFile('company_document')) {
                $request->validate([
                    'company_document' => 'required|mimes:jpeg,pdf,jpg',
                ]);

                $file = $request->file('company_document');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Users'), $thumbnailFilename);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'company_name' => $request->company_name,
                'profile_photo_path' => $filenameprofileimage == null ? $user->profile_photo_path : $filenameprofileimage,
                'company_document' => $thumbnailFilename == null ? $user->company_document : $thumbnailFilename,
            ]);

            return response()->json(['success' => true, 'message' => 'Profile Updated..!!!', 'data' => $user]);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function viewuserlistings(Request $rq)
    {
        $allproperties = PropertyListing::where('roleid', $rq->id)->orderBy('created_at', 'DESC')->get();
        $allpropertiescnt = PropertyListing::where('roleid', $rq->id)->count();
        return response()->json([
            'success' => true,
            'properties' => $allproperties,
            'count' => $allpropertiescnt,
        ]);
    }

    public function usernotifications(Request $rq)
    {
        $notifications = Nortification::where('sendto', $rq->user_type)->orWhere('sendto', 'all')->orderBy('created_at', 'DESC')->get();
        $notifycnt = Nortification::where('sendto', $rq->user_type)->count();
        return response()->json([
            'success' => true,
            'notifications' => $notifications,
            'count' => $notifycnt,
        ]);
    }

    public function listingscitywise()
    {
        $cityListings = PropertyListing::where('status', 'published')
            ->get()
            ->groupBy('city');

        $listingsbycitys = Master::where('type', 'City')->get();
        foreach ($listingsbycitys as $city) {
            $cityName = $city->label;

            $city->listings = $cityListings[$cityName] ?? collect();
            $city->property_count = $city->listings->count();
        }
        return response()->json([
            'success' => true,
            'data' => $listingsbycitys,
        ]);
    }


    public function updatelisting(Request $request, $id)
    {
        $datareq = $request->all();
        // \Log::info('Received Data:', $request->all());
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

            // Handle Master Plan Document
            $masterdoc = null;
            if ($request->hasFile('masterplandocument')) {
                $request->validate([
                    'masterplandocument' => 'required|mimes:pdf,jpeg,jpg',
                ]);

                $file = $request->file('masterplandocument');
                $masterdoc = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/images/Listings'), $masterdoc);
            }

            // \Log::info("Received Gallery Images", ['files' => $request->file('galleryImages')]);

            // Handle multiple gallery images
            $galleryImages = [];
            if ($request->hasFile('galleryImages')) {
                $request->validate([
                    'galleryImages.*' => 'required|image|mimes:jpeg,png,jpg',
                ]);
                foreach ($request->file('galleryImages') as $file) {
                    $imageName = md5(rand(1000, 10000)) . '.' . strtolower($file->getClientOriginalExtension());
                    $file->move(public_path('assets/images/Listings'), $imageName);
                    $galleryImages[] = 'assets/images/Listings/' . $imageName;
                }
            } else {
                // \Log::info("🚨 No gallery images detected in request.");
            }


            // Handle multiple documents
            $documents = [];
            if ($request->hasFile('documents')) {
                $request->validate([
                    'documents.*' => 'required|mimes:pdf,jpeg,jpg',
                ]);
                foreach ($request->file('documents') as $file) {
                    $docName = md5(rand(1000, 10000)) . '.' . strtolower($file->getClientOriginalExtension());
                    $file->move(public_path('assets/images/Listings'), $docName);
                    $documents[] = 'assets/images/Listings/' . $docName;
                }
            }

            // Handle multiple videos
            $Videos = [];
            if ($request->hasFile('propertyvideos')) {
                $request->validate([
                    'propertyvideos.*' => 'required|mimes:mp4,mov,avi',
                ]);
                foreach ($request->file('propertyvideos') as $file) {
                    $videoName = md5(rand(1000, 10000)) . '.' . strtolower($file->getClientOriginalExtension());
                    $file->move(public_path('assets/images/Listings'), $videoName);
                    $Videos[] = 'assets/images/Listings/' . $videoName;
                }
            }

            $olddata = PropertyListing::find($id);

            $propertydata = PropertyListing::where('id', $id)->update([
                'usertype' => 'Admin',
                'roleid' => $datareq['roleid'],
                'property_name' => $datareq['property_name'],
                'nearbylocation' => $datareq['nearbylocation'],
                'approxrentalincome' => $datareq['approxrentalincome'],
                'discription' => strip_tags($datareq['description'] ?? ''), // Remove HTML tags
                'price' => $datareq['price'],
                'pricehistory' =>  $datareq['historydate'],
                'squarefoot' => $datareq['sqfoot'],
                'bedroom' => $datareq['bedroom'],
                'bathroom' => $datareq['bathroom'],
                'floor' => $datareq['floor'],
                'city' => $datareq['city'],
                'address' => $datareq['officeaddress'],
                'thumbnail' => $thumbnailFilename ?? $olddata->thumbnail,
                'masterplandoc' => $masterdoc ?? $olddata->masterdoc,
                'maplocations' => $datareq['location'] ?? $olddata->maplocations,
                'category' => $datareq['category'],
                'gallery' => !empty($galleryImages) ? json_encode($galleryImages) : $olddata->gallery,
                'documents' => !empty($documents) ? json_encode($documents) : $olddata->documents,
                'amenties' => $datareq['amenities'] ?? $olddata->amenities,
                'videos' => !empty($Videos) ? json_encode($Videos) : $olddata->videos,
                'status' =>'unpublished',
            ]);
            Log::info(['propertydata' => $propertydata]);
            return response()->json(['data' => $propertydata, 'message' => 'Listing Updated successfully!']);
        } catch (Exception $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()]);
        }
    }
    
    
     // **WEB LOGIN - Redirects to Google for Authentication**
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    // **WEB AUTHENTICATION - Handles Callback from Google**
    public function GoogleAuth()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            $user = RegisterUser::where('google_id', $googleUser->id)
                ->orWhere('email', $googleUser->email)
                ->first();
            
            if ($user) {
                Auth::guard('customer')->login($user);
                $user->update(['verification_status' => 1]);
                return redirect()->route('website.homepage')->with('success', 'You are logged in successfully');
            }

            return redirect()->route('website.userlogin')->with('error', 'This user is not registered');
        } catch (Exception $exception) {
            return redirect()->route('website.userlogin')->with('error', 'Something went wrong: ' . $exception->getMessage());
        }
    }

    // **API LOGIN/REGISTER - Handles Google Sign-In for Mobile Apps / Frontend**
    public function appGoogleAuth(Request $request)
    {
        try {
            $request->validate(['token' => 'required|string']);
            
            // Verify token with Google API
            $googleUser = Http::get('https://www.googleapis.com/oauth2/v3/userinfo', [
                'access_token' => $request->token,
            ])->json();
            
            if (!isset($googleUser['sub'])) {
                return response()->json(['success' => false, 'message' => 'Invalid Google token'], 401);
            }

            // Check if user exists
            $user = RegisterUser::where('google_id', $googleUser['sub'])
                ->orWhere('email', $googleUser['email'])
                ->first();

            if (!$user) {
                // Register new user
                $user = RegisterUser::create([
                    'name' => $googleUser['name'],
                    'email' => $googleUser['email'],
                    'google_id' => $googleUser['sub'],
                    'user_type' => $request->user_type ?? 'default',
                    'verification_status' => 1,
                    'profile_photo_path' => $googleUser['picture'] ?? 'public/assets/images/defaultuser.png',
                    'password' => Hash::make(uniqid()),
                ]);
            }

            // Log in the user
            Auth::guard('customer')->login($user);
            
            // Generate API token for mobile/web
            $apiToken = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'User authenticated successfully',
                'token' => $apiToken,
                'data' => $user
            ], 200);
        } catch (Exception $exception) {
            return response()->json(['success' => false, 'message' => 'Something went wrong', 'error' => $exception->getMessage()], 500);
        }
    }

    // **API REGISTER - Handles Google Registration**
    public function googleRegister(Request $request)
    {
        try {
            $client = new Google_Client(['client_id' => config('services.google.client_id')]);
            $payload = $client->verifyIdToken($request->id_token);
            
            if (!$payload) {
                return response()->json(['error' => 'Invalid ID Token'], 400);
            }
            
            $googleId = $payload['sub'];
            $email = $payload['email'];
            $name = $payload['name'];
            $avatar = $payload['picture'] ?? 'public/assets/images/defaultuser.png';
            $userType = $request->user_type ?? 'default';
            
            $user = RegisterUser::where('email', $email)->first();
            
            if ($user) {
                return response()->json(['message' => 'User already exists'], 409);
            }
            
            $newUser = RegisterUser::create([
                'name' => $name,
                'user_type' => $userType,
                'email' => $email,
                'google_id' => $googleId,
                'verification_status' => 1,
                'profile_photo_path' => $avatar,
                'password' => Hash::make(uniqid()),
            ]);
            
            return response()->json(['message' => 'Registered Successfully', 'user' => $newUser], 201);
        } catch (Exception $e) {
            return response()->json(['error' => 'Something went wrong', 'message' => $e->getMessage()], 500);
        }
    }
}
