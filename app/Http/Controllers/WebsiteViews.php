<?php
// ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteViews extends Controller
{
    public function homepage(){
        return view('WebsitePages.home');
    }
}
