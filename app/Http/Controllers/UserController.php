<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.userList',[]);
    }
    public function add(){
        return view('user.addUser',[]);
    }
}
