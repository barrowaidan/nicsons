<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use Illuminate\Support\Facades\Storage;
use Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['company'] = CompanyDetails::all();

        return view('admin.about.index', $data);
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
        //
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
        //
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
            'about_company' => 'required',
            'mission' => 'required',
            'vision' => 'required',
            'core_value' => 'required',
            'connection' => 'required',
            'commitment' => 'required',
            'creativity' => 'required',
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            //Create image names
            if ($request->hasFile('image1')) {
                $curr_slide1_image_name = CompanyDetails::find($id)->slide1;
                $slide1_image_name = time().rand(1,9999999).'.'.$request->image1->Extension();
           
                if (Storage::exists('assets/img/hero/' . $curr_slide1_image_name)) {
                    Storage::delete('assets/img/hero/' . $curr_slide1_image_name);
                }
                $request->image1->move(public_path('assets/img/hero/'), $slide1_image_name);
                
            }
            else{
                $slide1_image_name = CompanyDetails::find($id)->slide1;
            }
            
            //Create image names
            if ($request->hasFile('image2')) {
                $curr_slide2_image_name = CompanyDetails::find($id)->slide2;
                $slide2_image_name = time().rand(1,9999999).'.'.$request->image2->Extension();
           
                if (Storage::exists('assets/img/hero/' . $curr_slide2_image_name)) {
                    Storage::delete('assets/img/hero/' . $curr_slide2_image_name);
                }
                $request->image2->move(public_path('assets/img/hero/'), $slide2_image_name);
                
            }
            else{
                $slide2_image_name = CompanyDetails::find($id)->slide2;
            }
            
            //Create image names
            if ($request->hasFile('image3')) {
                $curr_slide3_image_name = CompanyDetails::find($id)->slide3;
                $slide3_image_name = time().rand(1,9999999).'.'.$request->image3->Extension();
           
                if (Storage::exists('assets/img/hero/' . $curr_slide3_image_name)) {
                    Storage::delete('assets/img/hero/' . $curr_slide3_image_name);
                }
                $request->image3->move(public_path('assets/img/hero/'), $slide3_image_name);
                
            }
            else{
                $slide3_image_name = CompanyDetails::find($id)->slide3;
            }

            $company = CompanyDetails::find($id);

            $company->update([
                'about_company' => $request->about_company,
                'mission' => $request->mission,
                'vision' =>  $request->vision,
                'core_value' =>  $request->core_value,
                'connection' =>  $request->connection,
                'commitment' =>  $request->commitment,
                'creativity' =>  $request->creativity,
                'slide1' =>  $slide1_image_name,
                'slide2' =>  $slide2_image_name,
                'slide3' =>  $slide3_image_name,
            ]);

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
        //
    }
}
