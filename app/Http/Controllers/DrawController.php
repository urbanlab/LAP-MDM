<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrawController extends Controller
{
    public function index()
    {
        return view('draw', compact('id'));
    }
    public function saveImage(Request $request)
{
    var_dump($image);
    $image = Image::make($request->get('imgBase64'));
    $image->save('public/media/bar.jpg');
    return 'HELLO';
}
}
