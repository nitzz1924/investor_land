<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
class UserViews extends Controller
{
    public function dashboard(){
        return view('UserPanelPages.dashboard');
    }

    public function logoutuserpanel()
    {
        Session::flush();
        Auth::guard('customer')->logout();
        return redirect()->route('website.userlogin');
    }
}
