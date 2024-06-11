<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['permissions'] = Permission::all();
        return view('users_management.permissions.index', $data);
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
            'permission_name' => 'required'
        ]);
        if($validator->fails()){
            $response['errors'] = $validator->errors();
            $response['message'] = null;
            return response()->json($response);
        }
        else{
            if(Count(DB::table('permissions')->where('name', $request->permission_name)->get()) == 0){
                Permission::create(['name' => $request->permission_name]);
                $response['message'] = 'Permission has created successfully';
                $response['errors'] = null;
                return response()->json($response);
            }
            else{
                $response['message'] = 'Permission already exist ';
                $response['errors'] = null;
                return response()->json($response);
            }
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
        $response['permission'] = Permission::find($id);

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
            'permission_name' => 'required'
        ]);
        if($validator->fails()){
            $response['errors'] = $validator->errors();
            $response['message'] = null;
            return response()->json($response);
        }
        else{
           $permission = Permission::find($id);
           $permission->name = $request->permission_name;
           if ($permission->save()) {
                $response['message'] = 'Permission has updated successfully';
                $response['errors'] = null;

                return response()->json($response);
           }
           else{
            $response['message'] = 'Permission update fail';
            $response['errors'] = null;

            return response()->json($response);
           }
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
