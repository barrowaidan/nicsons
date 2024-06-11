<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\events;
use App\Models\titles;
use App\Models\Statistical;
use App\Models\Services;
use App\Models\faqs;
use App\Models\User;

class AboutPageController extends Controller
{
    public function index(){
        $data['company'] = companyDetails::all();
        $data['title'] = titles::where('title', 'CEO')->get();
        $data['statistical'] = Statistical::orderBy('created_at', 'ASC')->latest()->take('2')->get();
        $data['faqs'] = faqs::orderBy('created_at', 'ASC')->get();
        $data['services'] = Services::all();
        $data['team'] = User::where('title_id', '!=', null)->get();
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();

        return view("website.about", $data);
    }
}
