<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\Services;
use App\Models\events;

class NewsPageController extends Controller
{
    public function index(){
        $data['company'] = companyDetails::all();
        $data['services'] = Services::all();
        $data['news'] = events::all();
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();

        return view("website.news", $data);
    }
}
