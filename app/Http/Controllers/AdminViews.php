<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViews extends Controller
{
    public function dashboard()
    {
        return view('AdminPanelPages.dashboard');
    }
}
