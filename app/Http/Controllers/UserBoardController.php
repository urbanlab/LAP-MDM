<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserBoardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('userBoard',["users"=>$users]);
       // }
    }
}
