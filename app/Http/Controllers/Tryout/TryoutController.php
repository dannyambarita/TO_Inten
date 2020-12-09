<?php

namespace App\Http\Controllers\Tryout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TryoutModel;

class TryoutController extends Controller
{
    public function tryout()
    {
        return response()->json(TryoutModel::get(), 200);
    }

    public function tryoutbyID($id_tryout)
    {
        $tryout = TryoutModel::where('id_tryout', $id_tryout)->get()->first();
        if (is_null($tryout)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(TryoutModel::find($id_tryout), 200);
    }

    public function tryoutSave(Request $request)
    {
        $tryout = TryoutModel::create($request->all());
        return response()->json($tryout, 201);
    }

    public function tryoutUpdate(Request $request, $id_tryout)
    {
        $tryout = TryoutModel::where('id_tryout', $id_tryout)->get()->first();
        if (is_null($tryout)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $tryout->update($request->all());
        return response()->json($tryout, 200);
    }

    public function tryoutDelete($id_tryout)
    {
        $tryout = TryoutModel::where('id_tryout', $id_tryout)->get()->first();
        if (is_null($tryout)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $tryout->delete();
        return response()->json(null, 204);
    }
}
