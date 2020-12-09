<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SectionModel;

class SectionController extends Controller
{
    public function section()
    {
        return response()->json(SectionModel::get(), 200);
    }

    public function sectionbyID($id_section)
    {
        $section = SectionModel::where('id_section', $id_section)->get()->first();
        if (is_null($section)) {
            return response()->json('Record not found!', 404);
        }
        return response()->json(SectionModel::find($id_section), 200);
    }

    public function sectionSave(Request $request)
    {
        $section = SectionModel::create($request->all());
        return response()->json($section, 201);
    }

    public function sectionUpdate(Request $request, $id_section)
    {
        $section = SectionModel::where('id_section', $id_section)->get()->first();
        if (is_null($section)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $section->update($request->all());
        return response()->json($section, 200);
    }

    public function sectionDelete($id_section)
    {
        $section = SectionModel::where('id_section', $id_section)->get()->first();
        if (is_null($section)) {
            return response()->json(["message" => "Record not found!"], 404);
        }
        $section->delete();
        return response()->json(null, 204);
    }
}
