<?php

namespace App\Http\Controllers\Question2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question2Model;

class Question2Controller extends Controller
{
    public function question2()
    {
        return response()->json(Question2Model::get(), 200);
    }

    public function question2byID($id_question_attempt2)
    {
        $question2 = Question2Model::where('id_question_attempt2', $id_question_attempt2)->get()->first();
        if (is_null($question2)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(Question2Model::find($id_question_attempt2), 200);
    }

    public function question1Save(Request $request)
    {
        $question2 = Question2Model::create($request->all());
        return response()->json($question2, 201);
    }

    public function question1Update(Request $request, $id_question_attempt2)
    {
        $question2 = Question2Model::where('id_question_attempt2', $id_question_attempt2)->get()->first();
        if (is_null($question2)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question2->update($request->all());
        return response()->json($question2, 200);
    }

    public function question2Delete($id_question_attempt2)
    {
        $question2 = Question2Model::where('id_question_attempt2', $id_question_attempt2)->get()->first();
        if (is_null($question2)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question2->delete();
        return response()->json(null, 204);
    }
}
