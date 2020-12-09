<?php

namespace App\Http\Controllers\Question2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question2Model;

class Question2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Question2Model::get(), 200);
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
        $question2 = Question2Model::create($request->all());
        return response()->json($question2, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_question_attempt2)
    {
        $question2 = Question2Model::where('id_question_attempt2', $id_question_attempt2)->get()->first();
        if (is_null($question2)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(Question2Model::find($id_question_attempt2), 200);
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
    public function update(Request $request, $id_question_attempt2)
    {
        $question2 = Question2Model::where('id_question_attempt2', $id_question_attempt2)->get()->first();
        if (is_null($question2)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question2->update($request->all());
        return response()->json($question2, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_question_attempt2)
    {
        $question2 = Question2Model::where('id_question_attempt2', $id_question_attempt2)->get()->first();
        if (is_null($question2)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question2->delete();
        return response()->json(null, 204);
    }
}
