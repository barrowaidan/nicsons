<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\events;
use App\Models\Services;
use App\Models\faqs;

class ServiceDetailsPageController extends Controller
{
    public function index($id){
        $data['company'] = companyDetails::all();
        $data['services'] = Services::all();
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();
        $data['service'] = Services::find($id);
        $data['faqs'] = faqs::orderBy('created_at', 'ASC')->get();

        return view("website.service_details", $data);
    }
}
