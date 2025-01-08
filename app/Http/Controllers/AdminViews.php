<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\RegisterCompany;
use Illuminate\Http\Request;

class AdminViews extends Controller
{
    public function admindashboard()
    {
        return view('AdminPanelPages.dashboard');
    }
    public function master()
    {
        $data = Master::where('type', 'Master')->get();
        $allcategories = Master::orderBy('created_at', 'desc')->get();

        return view('AdminPanelPages.master', compact('data', 'allcategories'));
    }
    public function companyprofile()
    {
        $companydata = RegisterCompany::first();
        return view('AdminPanelPages.companyprofile', compact('companydata'));
    }
}
