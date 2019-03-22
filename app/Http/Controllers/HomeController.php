<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       /* $folders = Folder::all();
        foreach ($folders as $folder) {
        echo $folder->icon;*/
        $folders = '1522';
        //$user = Users::find(1); //lets say for test we just took firs user
        //return $user->products()->get();
        return view('home',["folders"=>$folders]);
       // }
    }
}
