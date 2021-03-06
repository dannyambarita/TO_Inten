<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\RoleModel;

class Role extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(RoleModel::get(), 200);
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
        $role = RoleModel::create($request->all());
        return response()->json($role, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_role)
    {
        $role = RoleModel::where('id_role', $id_role)->get()->first();
        if (is_null($role)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(RoleModel::find($id_role), 200);
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
    public function update(Request $request, $id_role)
    {
        $role = RoleModel::where('id_role', $id_role)->get()->first();
        if (is_null($role)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $role->update($request->all());
        return response()->json($role, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_role)
    {
        $role = RoleModel::where('id_role', $id_role)->get()->first();
        if (is_null($role)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $role->delete();
        return response()->json(null, 204);
    }
}
