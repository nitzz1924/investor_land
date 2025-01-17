<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

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
}
