<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function dokumen(){
        return view('folder.dokumen',[]);
    }
    public function dataPrimer(){
        return view('folder.dataPrimer',[]);
    }
    public function dataSekunder(){
        return view('folder.dataSekunder',[]);
    }
}
