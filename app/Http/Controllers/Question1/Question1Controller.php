<?php

namespace App\Http\Controllers\Question1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Question1Model;

class Question1Controller extends Controller
{
    public function question1()
    {
        return response()->json(Question1Model::get(), 200);
    }

    public function question1byID($id_question_attempt)
    {
        $question1 = Question1Model::where('id_question_attempt', $id_question_attempt)->get()->first();
        if (is_null($question1)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(Question1Model::find($id_question_attempt), 200);
    }

    public function question1Save(Request $request)
    {
        $question1 = Question1Model::create($request->all());
        return response()->json($question1, 201);
    }

    public function question1Update(Request $request, $id_question_attempt)
    {
        $question1 = Question1Model::where('id_question_attempt', $id_question_attempt)->get()->first();
        if (is_null($question1)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question1->update($request->all());
        return response()->json($question1, 200);
    }
























































    public function question1Delete($id_question_attempt)
    {
        $question1 = Question1Model::where('id_question_attempt', $id_question_attempt)->get()->first();
        if (is_null($question1)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $question1->delete();
        return response()->json(null, 204);
    }
}
