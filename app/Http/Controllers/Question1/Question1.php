<?php

namespace App\Http\Controllers\Question1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question1Model;

class Question1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Question1Model::get(), 200);
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
        $question1 = Question1Model::create($request->all());
        return response()->json($question1, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_question_attempt)
    {
        $question1 = Question1Model::where('id_question_attempt', $id_question_attempt)->get()->first();
        if (is_null($question1)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(Question1Model::find($id_question_attempt), 200);
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
    public function update(Request $request, $id_question_attempt)
    {
        $question1 = Question1Model::where('id_question_attempt', $id_question_attempt)->get()->first();
        if (is_null($question1)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question1->update($request->all());
        return response()->json($question1, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_question_attempt)
    {
        $question1 = Question1Model::where('id_question_attempt', $id_question_attempt)->get()->first();
        if (is_null($question1)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question1->delete();
        return response()->json(null, 204);
    }
}
