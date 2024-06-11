<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Statistical;
use Validator;

class StatisticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['statistics'] = Statistical::all();

        return view('admin.statistics.index', $data);
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
            'number' => 'required',
            'text' => 'required',
            'image' => 'required'
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
            $Statistic = Statistical::create([
                'number' => $request->number,
                'text' => $request->text,
            ]);

            $Statistic->photo()->create([
                'img_path' => $image_name
            ]);
            
            $response['message'] = 'Statistics has been added successfull';
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
        $response['statistics'] = Statistical::find($id);
        $response['photo'] = $response['statistics']->photo;

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
            'number' => 'required',
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
                $image_name = Statistical::find($id)->photo[0]->img_path;
            }

            $Statistic = Statistical::find($id);

            //Create hotel details
            $Statistic->update([
                'number' => $request->number,
                'text' => $request->text,
            ]);

            if (!is_null($request->image)) {
                $Statistic->photo()->update([
                    'img_path' => $image_name
                ]);
            }


            $response['message'] = 'Statistic details has been updated successfull';
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
        $Statistic = Statistical::find($id);
        $curr_image_name = $Statistic->photo[0]->img_path;
   
        if (Storage::exists('assets/img/' . $curr_image_name)) {
            Storage::delete('assets/img/' . $curr_image_name);
        }
        $Statistic->delete();
        $Statistic->photo()->delete();

        $response['message'] = 'Statistic details has been deleted successfull';
        $response['errors'] = null;

        return response()->json($response);
    }
}
