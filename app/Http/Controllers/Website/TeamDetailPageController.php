<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\events;
use App\Models\User;

class TeamDetailPageController extends Controller
{
    public function index($id){
        $data['company'] = companyDetails::all();
        $data['member'] = User::find($id);
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();

        return view("website.team_details", $data);
    }
}
