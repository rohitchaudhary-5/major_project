<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Userscontroller extends Controller
{
    public function index(){
        $users = User::all();
        return view('user',compact('users'));
    }
}
