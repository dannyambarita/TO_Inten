<?php

namespace App\Http\Controllers\Tryout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TryoutModel;

class Tryout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TryoutModel::get(), 200);
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
        $tryout = TryoutModel::create($request->all());
        return response()->json($tryout, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tryout)
    {
        $tryout = TryoutModel::where('id_tryout', $id_tryout)->get()->first();
        if (is_null($tryout)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(TryoutModel::find($id_tryout), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tryout)
    {
        $tryout = TryoutModel::where('id_tryout', $id_tryout)->get()->first();
        if (is_null($tryout)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $tryout->update($request->all());
        return response()->json($tryout, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tryout)
    {
        $tryout = TryoutModel::where('id_tryout', $id_tryout)->get()->first();
        if (is_null($tryout)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $tryout->delete();
        return response()->json(null, 204);
    }
}
