<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index(){


        $files = Storage::disk('avatars')->files();

        //dd($files);

        return view('index', compact('files'));
    }
    //
}
