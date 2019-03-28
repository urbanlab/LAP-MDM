<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use App\User;

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
    public function index($id= null)
    {
        if($id){
            $currentUser = User::find($id);
            $folders = $currentUser->folders;
            return view('home',["currentUser"=>$currentUser], ["folders"=>$folders]);
        }
        else {
            $userId = \Auth::user()->id;
            $currentUser = User::find($userId);
            $folders = $currentUser->folders;
            return view('home',["currentUser"=>$currentUser], ["folders"=>$folders]);
        }
        
       // }
    }
}
