<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\SocialMedia;
use Validator;

class CompanyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['company'] = CompanyDetails::all();

        return view('admin.company.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Make validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_no' => 'required|unique:company_details,phone_no',
            'email' => 'required|email|unique:company_details,email',
            'physical_address' => 'required',
            'postal_address' => 'required',
            'map_link' => 'required',
            'working_hours' => 'required',
            'image' => 'required',
            'motivation' => 'required'
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            //Create image names
            if ($request->hasFile('image')) {
                $logo_image_name = time().rand(1,9999999).'.'.$request->image->Extension();
           
                $request->image->move(public_path('assets/img/'), $logo_image_name);
            }
            else{
                $logo_image_name = null;
            }

            //Create hotel details
            $company = CompanyDetails::create([
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'email' =>  $request->email,
                'physical_address' =>  $request->physical_address,
                'post_address' =>  $request->postal_address,
                'map_location' =>  $request->map_link,
                'working_hours' =>  $request->working_hours,
                'logo' =>  $logo_image_name,
                'motivation' => $request->motivation,
            ]);

            if (!is_null($request->facebookname) && !is_null($request->facebooklink)) {
                $company->socialMedia()->create([
                    'name' => $request->facebookname,
                    'link' => $request->facebooklink,
                ]);
            }
            if (!is_null($request->twittername) && !is_null($request->twitterlink)) {
                $company->socialMedia()->create([
                    'name' => $request->twittername,
                    'link' => $request->twitterlink,
                ]);
            }
            if (!is_null($request->instagramname) && !is_null($request->instagramlink)) {
                $company->socialMedia()->create([
                    'name' => $request->instagramname,
                    'link' => $request->instagramlink,
                ]);
            }
            if (!is_null($request->youtubename) && !is_null($request->youtubelink)) {
                $company->socialMedia()->create([
                    'name' => $request->youtubename,
                    'link' => $request->youtubelink,
                ]);
            }
            
            $response['message'] = 'Company detail has been addded successfull';
            $response['errors'] = null;

            return response()->json($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['company'] = CompanyDetails::find($id);
        $response['socialmedia'] = $response['company']->socialMedia;

        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Make validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_no' => 'required',
            'email' => 'required|email',
            'physical_address' => 'required',
            'post_address' => 'required',
            'map_link' => 'required',
            'working_hours' => 'required',
            'motivation' => 'required'
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            //Create image names
            if ($request->hasFile('image')) {
                $curr_logo_image_name = CompanyDetails::find($id)->logo;
                $logo_image_name = time().rand(1,9999999).'.'.$request->image->Extension();
           
                if (Storage::exists('assets/img/' . $curr_logo_image_name)) {
                    Storage::delete('assets/img/' . $curr_logo_image_name);
                }
                $request->image->move(public_path('assets/img/'), $logo_image_name);
                
            }
            else{
                $logo_image_name = CompanyDetails::find($id)->logo;
            }

            $company = CompanyDetails::find($id);

            $company->update([
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'email' =>  $request->email,
                'physical_address' =>  $request->physical_address,
                'post_address' =>  $request->post_address,
                'map_location' =>  $request->map_link,
                'working_hours' =>  $request->working_hours,
                'logo' =>  $logo_image_name,
                'motivation' => $request->motivation,
            ]);

            foreach ($company->socialMedia as $key => $value) {
                if ($value->name == 'facebook') {
                    $socialmedia = SocialMedia::find($value->id);
                    $socialmedia->update([
                        'link' => $request->facebooklink,
                    ]);
                }
                elseif ($value->name == 'twitter') {
                    $socialmedia = SocialMedia::find($value->id);
                    $socialmedia->update([
                        'link' => $request->twitterlink,
                    ]);
                }
                elseif ($value->name == 'twitter') {
                    $socialmedia = SocialMedia::find($value->id);
                    $socialmedia->update([
                        'link' => $request->twitterlink,
                    ]);
                }
                elseif ($value->name == 'instagram') {
                    $socialmedia = SocialMedia::find($value->id);
                    $socialmedia->update([
                        'link' => $request->instagramlink,
                    ]);
                }
                elseif ($value->name == 'youtube') {
                    $socialmedia = SocialMedia::find($value->id);
                    $socialmedia->update([
                        'link' => $request->youtubelink,
                    ]);
                }
            }

            $response['message'] = 'Company details has been updated successfull';
            $response['errors'] = null;

            return response()->json($response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = CompanyDetails::find($id);
        $curr_logo_image_name = $company->logo;
   
        if (Storage::exists('assets/img/' . $curr_logo_image_name)) {
            Storage::delete('assets/img/' . $curr_logo_image_name);
        }
        $company->delete();

        $response['message'] = 'Company details has been deleted successfull';
        $response['errors'] = null;

        return response()->json($response);
    }
}
