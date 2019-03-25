<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FolderController extends Controller
{
    public function add(Request $request) {
        Folder::create($request->all());
        return redirect('home');
      }
}
