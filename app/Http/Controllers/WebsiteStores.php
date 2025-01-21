<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Master;
use Illuminate\Http\Request;
use Exception;
class WebsiteStores extends Controller
{
    public function sendenquiry(Request $rq)
    {
        try {
            $attributes = Lead::create([
                'name' => $rq->customername,
                'mobilenumber' => $rq->phone,
                'email' => $rq->email,
                'city' => $rq->city,
                'state' => $rq->state,
                'housecategory' => $rq->propertytype,
                'inwhichcity' => $rq->cityofproperty,
                'propertyid' => 55,
                'userid' => 99,
            ]);
            return back()->with('success', "Enquiry Sent..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
