<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('search.search',[]);
    }

    public function hehe(Request $request){ 
        dd($request->all());
    }
}
