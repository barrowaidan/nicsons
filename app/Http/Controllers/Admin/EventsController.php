<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\events;
use Validator;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['events'] = events::orderBy('created_at', 'DESC')->latest()->take('200')->get();

        return view('admin.events.index', $data);
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
            $event = events::create([
                'name' => $request->name,
                'text' => $request->text,
            ]);

            $event->photo()->create([
                'img_path' => $image_name
            ]);
            
            $response['message'] = 'Events detail has been addded successfull';
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
        $response['event'] = events::find($id);
        $response['photo'] = $response['event']->photo;

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

            $event = events::find($id);

            //Create hotel details
            $event->update([
                'name' => $request->name,
                'text' => $request->text,
            ]);

            if (!is_null($request->image)) {
                $event->photo()->update([
                    'img_path' => $image_name
                ]);
            }


            $response['message'] = 'Events details has been updated successfull';
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
        $event = events::find($id);
        $curr_image_name = $event->photo[0]->img_path;
   
        if (Storage::exists('assets/img/' . $curr_image_name)) {
            Storage::delete('assets/img/' . $curr_image_name);
        }
        $event->delete();
        $event->photo()->delete();

        $response['message'] = 'Events details has been deleted successfull';
        $response['errors'] = null;

        return response()->json($response);
    }
}
