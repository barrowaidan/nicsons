<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\events;
use App\Models\Services;

class NewDetailsPageController extends Controller
{
    public function index($id){
        $data['company'] = companyDetails::all();
        $data['services'] = Services::all();
        $data['event'] = events::find($id);
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();

        return view("website.new_details", $data);
    }
}
