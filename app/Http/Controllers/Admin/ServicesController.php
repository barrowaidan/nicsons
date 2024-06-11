<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;
use Validator;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = Services::all();

        return view('admin.services.index', $data);
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
            'text' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            //Create image names
            if ($request->hasFile('image')) {
                $image_name = time().rand(1,9999999).'.'.$request->image->Extension();
           
                $request->image->move(public_path('assets/img/'), $image_name);
            }
            else{
                $image_name = null;
            }

            //Create hotel details
            $services = Services::create([
                'name' => $request->name,
                'text' => $request->text,
            ]);

            $services->photo()->create([
                'img_path' => $image_name
            ]);
            
            $response['message'] = 'Services detail has been addded successfull';
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
        $response['service'] = Services::find($id);
        $response['photo'] = $response['service']->photo;

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
            'text' => 'required',
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            //Create image names
            if ($request->hasFile('image')) {
                $image_name = time().rand(1,9999999).'.'.$request->image->Extension();
           
                $request->image->move(public_path('assets/img/'), $image_name);
            }
            else{
                $image_name = null;
            }

            $service = Services::find($id);

            //Create hotel details
            $service->update([
                'name' => $request->name,
                'text' => $request->text,
            ]);

            if (!is_null($request->image)) {
                $service->photo()->update([
                    'img_path' => $image_name
                ]);
            }


            $response['message'] = 'Services details has been updated successfull';
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
        $service = Services::find($id);
        $curr_image_name = $service->photo[0]->img_path;
   
        if (Storage::exists('assets/img/' . $curr_image_name)) {
            Storage::delete('assets/img/' . $curr_image_name);
        }
        $service->delete();
        $service->photo()->delete();

        $response['message'] = 'Services details has been deleted successfull';
        $response['errors'] = null;

        return response()->json($response);
    }
}
