<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    //
    public function showDropzone(){
        return view('dropzone.dropzone');
    }
}
