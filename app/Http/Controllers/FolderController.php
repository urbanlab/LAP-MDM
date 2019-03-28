<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FolderController extends Controller
{
    public function add($id,Request $request) {
        $userId = \Auth::user()->id;
        Folder::create($request->all());
        //return redirect('draw');
        return view('draw',compact('id', 'folders'));
      }

    public function update($id,Request $request) {
      //$folder = Folder::where('id', '=', $id)->first();
      //$folder = Folder::find($id);
      //$folder->title = $request;
      //echo '<h1>'.$id.'</h1>';
      //var_dump($request);
      //$user->email = 'john@foo.com';

      //$folder->save();
      Folder::whereId($id)->update($request->except(['_token']));
      return redirect('home');
    }

    public function delete($id, $userId) {
        var_dump($id);
        $folder = Folder::where('id', $id);
        $folder->delete();
        return redirect('home/'.$userId);
      }
}
