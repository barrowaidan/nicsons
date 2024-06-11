<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonials;
use Validator;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonials'] = testimonials::all();

        return view('admin.testimonial.index', $data);
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
            'title' => 'required',
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
            $testimonials = testimonials::create([
                'name' => $request->name,
                'title' => $request->title,
                'text' => $request->text,
            ]);

            $testimonials->photo()->create([
                'img_path' => $image_name
            ]);
            
            $response['message'] = 'Testimonial has been addded successfull';
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
        $response['testimonials'] = testimonials::find($id);
        $response['photo'] = $response['testimonials']->photo;

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
                if (count(testimonials::find($id)->photo) != 0) {
                    $curr_image_name = testimonials::find($id)->photo[0]->img_path;
                    if (Storage::exists('assets/img/' . $curr_image_name)) {
                        Storage::delete('assets/img/' . $curr_image_name);
                    }
                }
                else{
                    $image_name = time().rand(1,9999999).'.'.$request->image->Extension();
               
                    $request->image->move(public_path('assets/img/'), $image_name);

                    $testimonial = testimonials::find($id);
                    
                    $testimonial->photo()->create([
                        'img_path' => $image_name
                    ]);
                }
                $image_name = time().rand(1,9999999).'.'.$request->image->Extension();
           
                $request->image->move(public_path('assets/img/'), $image_name);
                
            }
            else{
                $image_name = testimonials::find($id)->photo[0]->img_path;
            }

            $testimonial = testimonials::find($id);

            //Create hotel details
            $testimonial->update([
                'name' => $request->name,
                'title' => $request->title,
                'text' => $request->text,
            ]);

            if (!is_null($request->image)) {
                $testimonial->photo()->update([
                    'img_path' => $image_name
                ]);
            }


            $response['message'] = 'Testimonial details has been updated successfull';
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
        $testimonial = testimonials::find($id);
        if (count($testimonial->photo) != 0) {
            $curr_image_name = $testimonial->photo[0]->img_path;
            if (Storage::exists('assets/img/' . $curr_image_name)) {
                Storage::delete('assets/img/' . $curr_image_name);
            }
        }
        $testimonial->delete();
        $testimonial->photo()->delete();

        $response['message'] = 'Testimonial details has been deleted successfull';
        $response['errors'] = null;

        return response()->json($response);
    }
}
