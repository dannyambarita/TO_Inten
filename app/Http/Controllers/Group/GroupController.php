<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\GroupModel;

class GroupController extends Controller
{
    public function group()
    {
        return response()->json(GroupModel::get(), 200);
    }

    public function groupbyID($id_group)
    {
        $group = GroupModel::where('id_group', $id_group)->get()->first();
        if (is_null($group)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(GroupModel::find($id_group), 200);
    }

    public function groupSave(Request $request)
    {
        $group = GroupModel::create($request->all());
        return response()->json($group, 201);
    }

    public function groupUpdate(Request $request, $id_group)
    {
        $group = GroupModel::where('id_group', $id_group)->get()->first();
        if (is_null($group)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $group->update($request->all());
        return response()->json($group, 200);
    }

    public function groupDelete($id_group)
    {
        $group = GroupModel::where('id_group', $id_group)->get()->first();
        if (is_null($group)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $group->delete();
        return response()->json(null, 204);
    }
}
