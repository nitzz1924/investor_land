<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Lead;
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

    public function addproperty()
    {
        $categories = Master::where('type', 'Property Categories')->get();
        return view('AdminPanelPages.addproperty', compact('categories'));
    }

    public function editproperty($id)
    {
        // dd($id);
        $listingdata = PropertyListing::find($id);
        $categories = Master::where('type', 'Master')->get();
        return view('AdminPanelPages.editproperty', compact('listingdata', 'categories'));
    }

    public function allproperties()
    {
        $allproperties = PropertyListing::orderBy('created_at', 'DESC')->get();
        $allpropertiescnt = PropertyListing::count();
        return view('AdminPanelPages.allproperties', compact('allproperties', 'allpropertiescnt'));
    }

    public function viewproperty($id)
    {
        $listingdata = PropertyListing::find($id);
        $propertyName = $listingdata->property_name;
        return view('AdminPanelPages.viewproperty', compact('listingdata', 'propertyName'));
    }

    public function leadslist()
    {
        $leaddata = Lead::orderBy('created_at', 'DESC')->get();
        $leadcount = Lead::count();
        $followupstatus = Master::where('type', 'Follow Up Status')->get();
        return view('AdminPanelPages.leadslist', compact('leaddata', 'followupstatus', 'leadcount'));
    }

    public function leadstatusfilter($status)
    {
        $leaddata = Lead::where('status', $status)->get();
        $leadcount = Lead::count();
        $followupstatus = Master::where('type', 'Follow Up Status')->get();
        return view('AdminPanelPages.leadslist', compact('leaddata', 'leadcount', 'followupstatus'));
    }

    public function datefilterleads(Request $request)
    {
       
        $datefrom = $request->input('datefrom');
        $dateto = $request->input('dateto');

        // Convert the request dates to the database format (Y-m-d)
        $datefromFormatted = \Carbon\Carbon::createFromFormat('m/d/Y', $datefrom)->format('Y-m-d');
        // dd( $datefromFormatted);
        $datetoFormatted = \Carbon\Carbon::createFromFormat('m/d/Y', $dateto)->format('Y-m-d');

        // Query the database using the formatted dates
        $data = Lead::whereDate('created_at', '>=', $datefromFormatted)
            ->whereDate('created_at', '<=', $datetoFormatted)
            ->orderby('created_at', 'desc')
            ->get();

        return response()->json($data);
    }

    public function leadslistkaban()
    {
        $newleads = Lead::where('status','=','new')->orderBy('created_at', 'DESC')->get();
        $qualified = Lead::where('status','=','qualified')->orderBy('created_at', 'DESC')->get();
        $notresponded = Lead::where('status','=','not responded')->orderBy('created_at', 'DESC')->get();
        $paymentmode = Lead::where('status','=','Final')->orderBy('created_at', 'DESC')->get();
        $won = Lead::where('status','=','won')->orderBy('created_at', 'DESC')->get();
        $leadcount = Lead::count();
        $followupstatus = Master::where('type', 'Follow Up Status')->get();
        return view('AdminPanelPages.leadslistkaban', compact('newleads', 'qualified', 'notresponded', 'paymentmode', 'won', 'followupstatus', 'leadcount'));
    }

    public function updateLeadStatusKanban(Request $request)
    {
        $data = $request->all();
      
        $lead = Lead::find($data['card_id']);
        if ($lead) {
            $lead->update([
                'status' => $data['box_status'], 
            ]);
            return response()->json(['success' => true, 'message' => 'Lead status updated successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Lead not found.'], 404);
        }
    }

    public function blogslist()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        $blogcount = Blog::count();
        return view('AdminPanelPages.bloglists', compact('blogs', 'blogcount'));
    }

    public function addblog(){
        $categories = Master::where('type', 'Blog Categories')->get();
        return view('AdminPanelPages.addblog',compact('categories'));
    }

    public function editblog($id)
    {
        // dd($id);
        $blogs = Blog::find($id);
        $categories = Master::where('type', 'Blog Categories')->get();
        return view('AdminPanelPages.editblog', compact('blogs', 'categories'));
    }
}
