<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered; 
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\SocialMedia;
use App\Models\titles;
use Validator;
use Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teams'] = User::where('title_id', '!=', null)->get();
        $data['titles'] = titles::select('id', 'title')->get();
        $data['roles'] = Role::where('name', '!=', 'Super_Admin')->get();

        return view('admin.team.index', $data);
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
            'phone_no' => 'required|unique:users,phone_no',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'title' => 'required',
            'image' => 'required',
            'user_role' => 'required'
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

            //find company id
            $company_id = User::find(Auth::id())->company_id;

            //Create user details
            $user = User::create([
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'email' =>  $request->email,
                'password' => Hash::make($request->password),
                'image' =>  $image_name,
                'company_id' => $company_id,
                'title_id' =>  $request->title,
            ]);

            $user->assignRole($request->user_role);
            event(new Registered($user));

            if (!is_null($request->facebookname) && !is_null($request->facebooklink)) {
                $user->socialMedia()->create([
                    'name' => $request->facebookname,
                    'link' => $request->facebooklink,
                ]);
            }
            if (!is_null($request->twittername) && !is_null($request->twitterlink)) {
                $user->socialMedia()->create([
                    'name' => $request->twittername,
                    'link' => $request->twitterlink,
                ]);
            }
            if (!is_null($request->instagramname) && !is_null($request->instagramlink)) {
                $user->socialMedia()->create([
                    'name' => $request->instagramname,
                    'link' => $request->instagramlink,
                ]);
            }
            if (!is_null($request->youtubename) && !is_null($request->youtubelink)) {
                $user->socialMedia()->create([
                    'name' => $request->youtubename,
                    'link' => $request->youtubelink,
                ]);
            }
            
            $response['message'] = 'User detail has been addded successfull';
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
        $response['team'] = User::find($id);
        $role = $response['team']->getRoleNames();
        $response['role'] = $role;
        if (!is_null($response['team']->title)) {
            $response['title'] = $response['team']->title->id;
        }
        $response['media'] = $response['team']->socialMedia;

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
            'title' => 'required',
            'user_role' => 'required'
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            //Create image names
            if ($request->hasFile('image')) {
                $curr_image_name = User::find($id)->image;
                $image_name = time().rand(1,9999999).'.'.$request->image->Extension();
           
                if (Storage::exists('assets/img/' . $curr_image_name)) {
                    Storage::delete('assets/img/' . $curr_image_name);
                }
                $request->image->move(public_path('assets/img/'), $image_name);
                
            }
            else{
                $image_name = User::find($id)->image;
            }

            //Find user details
            $user = User::find($id);
            
            //find company id
            $company_id = User::find(Auth::id())->company_id;

            $user->update([
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'email' =>  $request->email,
                'title_id'=> $request->title,
                'company_id' => $company_id,
                'image' =>  $image_name,
            ]);
            
            $user->syncRoles($request->user_role);

            foreach ($user->socialMedia as $key => $value) {
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
            
            $response['message'] = 'User detail has been addded successfull';
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
        $user = User::find($id);
        $curr_image_name = $user->image;
   
        if (Storage::exists('assets/img/' . $curr_image_name)) {
            Storage::delete('assets/img/' . $curr_image_name);
        }
        $user->delete();

        $response['message'] = 'User details has been deleted successfull';
        $response['errors'] = null;

        return response()->json($response);
    }
}
