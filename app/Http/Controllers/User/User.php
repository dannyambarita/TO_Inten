<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\UserModel;
use Validator;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = UserModel::paginate(10);
        return response()->json($userList, 200);
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
        $rules = [
            'nama_lengkap'  => 'required',
            'nomor_telepon' => 'required|min:10|numeric',
            'email'         => 'required|valid_email',
            'password'      => 'required|min:3|password'
        ];
        /*
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        */
        $user = UserModel::create($request->all());
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        $user = UserModel::where('id_user', $id_user)->get()->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($user, 200);
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
    public function update(Request $request, $id_user)
    {
        $user = UserModel::where('id_user', $id_user)->get()->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $user->update($request->all());
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        $user = UserModel::where('id_user', $id_user)->get()->first();
        if (is_null($user)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $user->delete();
        return response()->json(null, 204);
    }
}
