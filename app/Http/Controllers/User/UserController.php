<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserModel;
//use Illuminate\Validation\Validator as Validator;
//use validator;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function user()
    {
        return response()->json(UserModel::get(), 200);
    }

    public function userbyID($id_user)
    {
        $user = UserModel::where('id_user', $id_user)->get()->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($user, 200);
    }

    public function userSave(Request $request)
    {
        $rules = [
            'nama_lengkap'  => 'required',
            'nomor_telepon' => 'required|min:10|numeric',
            'email'         => 'required|valid_email',
            'password'      => 'required|min:6|password'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


        $user = UserModel::create($request->all());
        return response()->json($user, 201);
    }

    public function userUpdate(Request $request, $id_user)
    {
        $user = UserModel::where('id_user', $id_user)->get()->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function userDelete($id_user)
    {
        $user = UserModel::where('id_user', $id_user)->get()->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $user->delete();
        return response()->json(null, 204);
    }
}
