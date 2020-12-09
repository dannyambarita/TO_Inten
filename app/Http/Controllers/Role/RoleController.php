<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\RoleModel;

class RoleController extends Controller
{
    public function role()
    {
        return response()->json(RoleModel::get(), 200);
    }

    public function rolebyID($id_role)
    {
        $role = RoleModel::where('id_role', $id_role)->get()->first();
        if (is_null($role)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(RoleModel::find($id_role), 200);
    }

    public function roleSave(Request $request)
    {
        $role = RoleModel::create($request->all());
        return response()->json($role, 201);
    }

    public function roleUpdate(Request $request, $id_role)
    {
        $role = RoleModel::where('id_role', $id_role)->get()->first();
        if (is_null($role)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $role->update($request->all());
        return response()->json($role, 200);
    }

    public function roleDelete(Request $request, $id_role)
    {
        $role = RoleModel::where('id_role', $id_role)->get()->first();
        if (is_null($role)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $role->delete();
        return response()->json(null, 204);
    }
}
