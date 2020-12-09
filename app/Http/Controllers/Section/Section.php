<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SectionModel;

class Section extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SectionModel::get(), 200);
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
        $section = SectionModel::create($request->all());
        return response()->json($section, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_section)
    {
        $section = SectionModel::where('id_section', $id_section)->get()->first();
        if (is_null($section)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(SectionModel::find($id_section), 200);
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
    public function update(Request $request, $id_section)
    {
        $section = SectionModel::where('id_section', $id_section)->get()->first();
        if (is_null($section)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $section->update($request->all());
        return response()->json($section, 200);

        /* Removehe specified resource from stora
     
     
     
     
    
     * @paramint  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function destroy($id_section)
    {
        $section = SectionModel::where('id_section', $id_section)->get()->first();
        if (is_null($section)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $section->delete();
        return response()->json(null, 204);
    }
}
