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

    public function update($id,Request $request) {
      //$folder = Folder::where('id', '=', $id)->first();
      //$folder = Folder::find($id);
      //$folder->title = $request;
      //echo '<h1>'.$id.'</h1>';
      //var_dump($request);
      //$user->email = 'john@foo.com';

      //$folder->save();
      Folder::whereId($id)->update($request->all());
      return redirect('home');
    }

    public function delete($id) {
        var_dump($id);
        Folder::where('id', $id)->delete();
        return redirect('home');
      }
}
