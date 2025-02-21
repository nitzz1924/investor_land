<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Master;
use App\Models\PropertyListing;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

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

        // Fetch city-wise property count along with listing details
        $cityListings = PropertyListing::where('status', 'published')
            ->get()
            ->groupBy('city');

        $listingsbycitys = Master::where('type', 'City')->get();
        foreach ($listingsbycitys as $city) {
            $cityName = $city->label; // Assuming 'label' stores city name

            $city->listings = $cityListings[$cityName] ?? collect(); 
            $city->property_count = $city->listings->count();
        }
        // dd($cityListings);

        return view('WebsitePages.home', compact('categories', 'listingsbycitys', 'listings', 'blogs', 'uniqueCategories', 'uniqueCities'));
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
        $minprice = $req->query('filterminprice');
        $maxprice = $req->query('filtermaxprice');
        $sqftfrom = $req->query('sqftfrom');
        $sqftto = $req->query('sqftto');

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

        if ($sqftfrom) {
            $listings->where('squarefoot', '>=', $sqftfrom);
        }

        if ($sqftto) {
            $listings->where('squarefoot', '<=', $sqftto);
        }

        $listings = $listings->where('status', '=', 'published')->paginate(4);

        return view('WebsitePages.propertylistings', compact('listings', 'category', 'city'));
    }

    public function propertydetails($id)
    {
        $categories = Master::where('type', 'Property Categories')->get();
        $propertydetails = PropertyListing::find($id);
        $propertyName = $propertydetails->property_name;
        $listings = PropertyListing::where('category',$propertydetails->category)->get();
        $priceHistory = json_decode($propertydetails->pricehistory, true);
     

        $dates = [];
        $prices = [];

        foreach ($priceHistory as $entry) {
            $formattedDate = date("M Y", strtotime($entry['dateValue']));
            $formattedPrice = str_replace(',', '', $entry['priceValue']); // Adjusting price format
            
            if (!in_array($formattedDate, $dates)) {
                $dates[] = $formattedDate;
                $prices[] = $formattedPrice;
            }

        }
        // dd( $listings);
        return view('WebsitePages.propertydetails', compact('prices','dates','categories','listings', 'propertydetails', 'propertyName'));
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
        $minprice = $req->input('filterminprice');
        $maxprice = $req->input('filtermaxprice');
        $sqftfrom = $req->input('sqftfrom');
        $sqftto = $req->input('sqftto');

        return response()->json([
            'success' => true,
            'redirect_url' => route('website.propertylistings', ['filtercategory' => $category, 'filtercity' => $city, 'filterminprice' => $minprice, 'filtermaxprice' => $maxprice, 'sqftfrom' => $sqftfrom, 'sqftto' => $sqftto]),
        ], 200);
    }
    public function myownlistings($usernameroute, $useridroute)
    {
        $username = $usernameroute;
        $userid = $useridroute;
        $listings = PropertyListing::where('roleid', $userid)->orderBy('created_at', 'DESC')->paginate(4);
        return view('WebsitePages.myownlistings', compact('listings', 'username', 'userid'));
    }
    public function whytoinvest(){
        return view('WebsitePages.whyToinvest');
    }
    public function resetpassword(){
        return view('auth.UserAgentPanel.ResetPassword');
    }

    public function changepassword($Email){
        $decrypedmail = decrypt($Email);
        return view('auth.UserAgentPanel.ChangePassword', compact('decrypedmail'));
    }

}
