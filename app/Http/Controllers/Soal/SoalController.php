<?php

namespace App\Http\Controllers\Soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SoalModel;

class SoalController extends Controller
{
    public function soal()
    {
        return response()->json(SoalModel::get(), 200);
    }

    public function sectionbyID($id_soal)
    {
        $soal = SoalModel::where('id_soal', $id_soal)->get()->first();
        if (is_null($soal)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(SoalModel::find($id_soal), 200);
    }

    public function soalSave(Request $request)
    {
        $soal = SoalModel::create($request->all());
        return response()->json($soal, 201);
    }

    public function soalUpdate(Request $request, $id_soal)
    {
        $soal = SoalModel::where('id_soal', $id_soal)->get()->first();
        if (is_null($soal)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $soal->update($request->all());
        return response()->json($soal, 200);
    }

    public function soalDelete($id_soal)
    {
        $soal = SoalModel::where('id_soal', $id_soal)->get()->first();
        if (is_null($soal)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $soal->delete();
        return response()->json(null, 204);
    }
}
