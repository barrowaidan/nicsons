<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\events;

class ContactUsPageController extends Controller
{
    public function index(){
        $data['company'] = companyDetails::all();
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();

        return view("website.contact_us", $data);
    }
}
