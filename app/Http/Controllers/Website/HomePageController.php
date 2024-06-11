<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Statistical;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\events;
use App\Models\Services;
use App\Models\testimonials;
use App\Models\User;

class HomePageController extends Controller
{
    public function index(){
        $data['company'] = companyDetails::all();
        $data['services'] = Services::all();
        $data['testimonials'] = testimonials::all();
        $data['working_process'] = WorkingProcess::all();
        $data['statistics'] = Statistical::all();
        $data['team'] = User::where('title_id', '!=', null)->get();
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();
        
        return view("website.home", $data);
    }
}
