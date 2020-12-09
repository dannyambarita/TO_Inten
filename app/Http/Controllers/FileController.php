<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function userList()
    {
        return response()->download(public_path('default.jpg'), 'User Image');
    }

    public function userSave(Request $request)
    {
        $fileName = "user_image.jpg";
        $path = $request->file('photo')->move(public_path("/", $fileName));
        $photoURL = url('/' . $fileName);
        return response()->json(['url' => $photoURL], 200);
    }
}
