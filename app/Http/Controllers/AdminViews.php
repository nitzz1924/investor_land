<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\PropertyListing;
use App\Models\RegisterCompany;
use Illuminate\Http\Request;
use Auth;
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
    public function myprofile()
    {
        $userdata = auth()->user();
        // dd($userdata);
        return view('AdminPanelPages.myprofile', compact('userdata'));
    }

    public function addproperty(){
        $categories = Master::where('type','Master')->get();
        return view('AdminPanelPages.addproperty',compact('categories'));
    }

    public function editproperty($id){
        // dd($id);
        $listingdata = PropertyListing::find($id);
        $categories = Master::where('type','Master')->get();
       return view('AdminPanelPages.editproperty',compact('listingdata','categories'));
    }

    public function allproperties(){
        $allproperties = PropertyListing::orderBy('created_at','DESC')->get();
        return view('AdminPanelPages.allproperties',compact('allproperties'));
    }

    public function viewproperty($id){
        $listingdata = PropertyListing::find($id);
        $propertyName = $listingdata->property_name;
        return view('AdminPanelPages.viewproperty', compact('listingdata', 'propertyName'));
    }
}
