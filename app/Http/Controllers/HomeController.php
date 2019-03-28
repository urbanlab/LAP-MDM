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
    public function index($id = null)
    {
        $userId = \Auth::user()->id;
        $currentUser = User::find($userId);

        if($id){
            $selectedUser = User::find($id);
            $folders = $selectedUser->folders;
            $userId = $id;
            return view('home',compact('currentUser', 'folders', 'userId'));
        }
        else {
            if($currentUser->state == 1){
                $users = User::all();
                return view('userBoard',["users"=>$users], ["currentUser"=>$currentUser]);
            }
            else{
            $userId = \Auth::user()->id;
            $currentUser = User::find($userId);
            $folders = $currentUser->folders;
            return view('home',["currentUser"=>$currentUser], ["folders"=>$folders]);
            }
        }
        
       // }
    }

    public function index2()
    {
        $userId = \Auth::user()->id;
        $currentUser = User::find($userId);


        if($currentUser->state == 1){
            $users = User::all();
            return view('userBoard',["users"=>$users], ["currentUser"=>$currentUser]);
        }
        else{
        $userId = \Auth::user()->id;
        $currentUser = User::find($userId);
        $folders = $currentUser->folders;
        return view('home',compact('currentUser', 'folders', 'userId'));
        }
        
        
       // }
    }
}
