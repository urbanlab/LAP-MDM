<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserBoardController extends Controller
{
    public function index()
    {
        $userId = \Auth::user()->id;
        $currentUser = User::find($userId);
        $users = User::all();
        return view('userBoard',["users"=>$users],["currentUser"=>$currentUser]);
       // }
    }
}
