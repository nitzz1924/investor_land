<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Master;
use App\Models\PropertyListing;
use Illuminate\Http\Request;

class WebsiteViews extends Controller
{
    public function homepage()
    {
        $categories = Master::where('type', 'Property Categories')->get();
        $listings = PropertyListing::orderBy('created_at', 'desc')->where('status', 'published')->get();
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $uniqueCategories = PropertyListing::select('category')->distinct()->pluck('category');
        // dd( $uniqueCategories);
        $uniqueCities = PropertyListing::select('city')->distinct()->pluck('city');
        return view('WebsitePages.home', compact('categories', 'listings', 'blogs', 'uniqueCategories', 'uniqueCities'));
    }
    public function aboutpage()
    {
        return view('WebsitePages.aboutpage');
    }
    public function contactpage()
    {
        return view('WebsitePages.contactpage');
    }
    public function blogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('WebsitePages.blogs', compact('blogs'));
    }
    public function blogdetails($id)
    {
        $blogdetails = Blog::find($id);
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        // dd( $blogdetails);
        return view('WebsitePages.blogdetails', compact('blogdetails', 'blogs'));
    }
    public function propertylistings(Request $req)
    {
        $category = $req->query('filtercategory');
        $city = $req->query('filtercity');

        $listings = PropertyListing::query();

        if ($category) {
            $listings->where('category', $category);
        }

        if ($city) {
            $listings->where('city', $city);
        }

        $listings = $listings->paginate(4);

        return view('WebsitePages.propertylistings', compact('listings', 'category', 'city'));
    }

    public function propertydetails($id)
    {
        $categories = Master::where('type', 'Property Categories')->get();
        $propertydetails = PropertyListing::find($id);
        $propertyName = $propertydetails->property_name;
        return view('WebsitePages.propertydetails', compact('categories', 'propertydetails', 'propertyName'));
    }
    public function userlogin()
    {
        return view('auth.UserAgentPanel.login');
    }
    public function registration()
    {
        return view('auth.UserAgentPanel.registration');
    }
    public function filterlistings(Request $req)
    {
        $category = $req->input('filtercategory');
        $city = $req->input('filtercity');

        return response()->json([
            'success' => true,
            'redirect_url' => route('website.propertylistings', ['filtercategory' => $category,'filtercity' => $city]),
        ], 200);
    }
    public function myownlistings($usernameroute, $useridroute){
        $username = $usernameroute;
        $userid = $useridroute;
        $listings = PropertyListing::where('roleid',$userid)->orderBy('created_at', 'DESC')->paginate(4);
        return view('WebsitePages.myownlistings', compact('listings', 'username', 'userid'));
    }

}
