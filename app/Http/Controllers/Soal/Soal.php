<?php

namespace App\Http\Controllers\Soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SoalModel;

class Soal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SoalModel::get(), 200);
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
        $soal = SoalModel::create($request->all());
        return response()->json($soal, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_soal)
    {
        $soal = SoalModel::where('id_soal', $id_soal)->get()->first();
        if (is_null($soal)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(SoalModel::find($id_soal), 200);
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
    public function update(Request $request, $id_soal)
    {
        $soal = SoalModel::where('id_soal', $id_soal)->get()->first();
        if (is_null($soal)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $soal->update($request->all());
        return response()->json($soal, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_soal)
    {
        $soal = SoalModel::where('id_soal', $id_soal)->get()->first();
        if (is_null($soal)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $soal->delete();
        return response()->json(null, 204);
    }
}
