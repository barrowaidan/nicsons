<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();
        $data['roles'] = Role::all();

        return view('users_management.users.index', $data);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone_no' => 'required|unique:staffs,phone_no',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_role' => 'required'
        ]);
        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        else {
            if ($request->hasFile('image')) {
                $image_name = time().rand(1,9999999).'.'.$request->image->Extension();
                $request->image->move(public_path('storage/user_uploaded_images'), $image_name);
            }
            else {
                $image_name = null;
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'image' => $image_name,
            ]);
            $user->assignRole($request->user_role);
            event(new Registered($user));
            $response['message'] = 'User has been created successfull';
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
        $data['user'] = User::find($id);
        $role = $data['user']->getRoleNames();
        if (Count($role) != 0 ) {
            $data['role'] = $role[0];
        }
        else{
            $data['role'] = '';
        }
        
        $data['role_permissions'] = $data['user']->getPermissionsViaRoles();


        return view('users_management.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['user'] = User::find($id);
        $role = $response['user']->getRoleNames();
        $response['role'] = $role;


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
        $validator = Validator::make($request->all(), [
            'u_name' => 'required',
            'u_email' => 'required|email',
            'u_role' => 'required',
        ]);
        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;

            return response()->json($response);
        }
        elseif ($request->hasFile('u_image')) {
            $image_name = time().rand(1,9999999).'.'.$request->u_image->Extension();
            $user = User::find($id);
            if (!is_null($request->password)) {
                $password = Hash::make($request->password);
            }
            else{
                $password = $user->password;
            }
            $user->name = $request->u_name;
            $user->email = $request->u_email;
            $user->image = $image_name;
            $user->password = $password;
            if ($user->image != null) {
                Storage::delete('storage/user_uploaded_images/' . $user->image);
            }
            $request->u_image->move(public_path('storage/user_uploaded_images'), $image_name);
            $user->syncRoles($request->u_role);
            $user->save();
            $response['message'] = "User updated successfull";
            $response['errors'] = null;

            return response()->json($response);

        }
        else {
            $user = User::find($id);
            if (!is_null($request->password)) {
                $password = Hash::make($request->password);
            }
            else{
                $password = $user->password;
            }
            $user->name = $request->u_name;
            $user->email = $request->u_email;
            $user->password = $password;
            $user->syncRoles($request->u_role);
            $user->save();
            $response['message'] = "User updated successfull";
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
        $user->delete();
        $response['message'] = 'User deleted successful';

        return response()->json($response);
    }
}
