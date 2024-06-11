<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['permissions'] = Permission::all();
        $data['roles'] = Role::all();
        return view('users_management.roles.index', $data);
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
        $validator = Validator::make($request->all(),[
            'role_name' => 'required|unique:roles,name',
            'permission' => 'required'
        ]);
        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;
            return response()->json($response);
        }
        else{
            $role = Role::create(['name' => $request->input('role_name')]);
            $role->syncPermissions($request->input('permission'));
            $response['message'] = 'Role created successfull';
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
        $data['role'] = Role::find($id);
        if (Count(User::role($data['role']->name)->get())  > 0) {
            $data['user'] = User::role($data['role']->name)->get();
        }
        else {
            $data['user'] = array(['id'=>0, 'name'=>"null", 'email'=>"null", 'created_at'=>"null", 'image'=>"null"]) ;
        }
        $data['user_no'] = Count(User::role($data['role']->name)->get());
        $data['role_permissions'] = $data['role']->permissions->pluck('name');

        return view('users_management.roles.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['role'] = Role::find($id);
        $response['role_permissions'] = $response['role']->permissions->pluck('name');

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
        $validator = Validator::make($request->all(),[
            'role_name' => 'required',
            'permission' => 'required'
        ]);
        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
            $response['message'] = null;
            return response()->json($response);
        }
        else{
            $role = Role::find($id);
            $role->name = $request->role_name;
            $role->save();
            $role->syncPermissions($request->input('permission'));
            $response['message'] = 'Role updated successfully';
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
