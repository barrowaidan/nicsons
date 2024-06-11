<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\Photos;
use App\Models\events;

class GalleryPageController extends Controller
{
    public function index(){
        $data['company'] = companyDetails::all();
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('4')->get();
        $data['photos'] = Photos::where('photoable_type', 'App\Models\events')->orWhere('photoable_type', 'App\Models\Services')->get();

        return view("website.gallery", $data);
    }
}
