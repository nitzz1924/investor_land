<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUser;
use Auth, Hash, Exception;
use App\Models\Blog;
use App\Models\PropertyListing;
use App\Models\Master;
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
                        $response = [
                            'success' => true,
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
            ]);

            $response = [
                'success' => true,
                'message' => 'You have been Registered Successfully..!!!',
                'data' => $attributes
            ];
        } catch (Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }

        return response()->json($response);
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

    public function getcategories(){
        $categories = Master::where('type', 'Property Categories')->get();
        return response()->json([
            'success' => true,
            'categories' => $categories
        ]);
    }

    public function propertydetails($id)
    {
        $categories = Master::where('type', 'Property Categories')->get();
        $propertydetails = PropertyListing::find($id);
        $propertyName = $propertydetails->property_name;
        return response()->json([
            'success' => true,
            'categories' => $categories,
            'details' => $propertydetails,
        ]);
    }
}
