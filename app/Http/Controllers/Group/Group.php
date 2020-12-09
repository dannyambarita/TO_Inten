<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\GroupModel;

class Group extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(GroupModel::get(), 200);
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
        $group = GroupModel::create($request->all());
        return response()->json($group, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_group)
    {
        $group = GroupModel::where('id_group', $id_group)->get()->first();
        if (is_null($group)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(GroupModel::find($id_group), 200);
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
        $group = GroupModel::where('id_group', $id_group)->get()->first();
        if (is_null($group)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $group->update($request->all());
        return response()->json($group, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = GroupModel::where('id_group', $id_group)->get()->first();
        if (is_null($group)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $group->delete();
        return response()->json(null, 204);
    }
}
