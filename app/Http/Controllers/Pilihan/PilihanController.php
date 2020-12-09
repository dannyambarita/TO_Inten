<?php

namespace App\Http\Controllers\Pilihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PilihanModel;

class PilihanController extends Controller
{
    public function pilihan()
    {
        return response()->json(PilihanModel::get(), 200);
    }

    public function pilihanbyID($id_pilihan)
    {
        $pilihan = PilihanModel::where('id_pilihan', $id_pilihan)->get()->first();
        if (is_null($pilihan)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(pilihanModel::find($id_pilihan), 200);
    }

    public function pilihanSave(Request $request)
    {
        $role = PilihanModel::create($request->all());
        return response()->json($role, 201);
    }

    public function pilihanUpdate(Request $request, $id_pilihan)
    {
        $pilihan = PilihanModel::where('id_pilihan', $id_pilihan)->get()->first();
        if (is_null($pilihan)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $pilihan->update($request->all());
        return response()->json($pilihan, 200);
    }

    public function roleDelete(Request $request, $id_pilihan)
    {
        $pilihan = PilihanModel::where('id_pilihan', $id_pilihan)->get()->first();
        if (is_null($pilihan)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $pilihan->delete();
        return response()->json(null, 204);
    }
}
