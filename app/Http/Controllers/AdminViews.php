<?php

namespace App\Http\Controllers;

use App\Models\Master;
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
}
