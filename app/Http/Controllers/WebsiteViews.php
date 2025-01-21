<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class WebsiteViews extends Controller
{
    public function homepage(){
        return view('WebsitePages.home');
    }
    public function aboutpage(){
        return view('WebsitePages.aboutpage');
    }
    public function contactpage(){
        return view('WebsitePages.contactpage');
    }
    public function blogs(){
        return view('WebsitePages.blogs');
    }
    public function blogdetails(){
        return view('WebsitePages.blogdetails');
    }
    public function propertylistings(){
        return view('WebsitePages.propertylistings');
    }
    public function propertydetails(){
        $categories = Master::where('type', 'Property Categories')->get();
        return view('WebsitePages.propertydetails', compact('categories'));
    }
    public function userlogin(){
        return view('auth.UserAgentPanel.login');
    }
    public function registration(){
        return view('auth.UserAgentPanel.registration');
    }
}
