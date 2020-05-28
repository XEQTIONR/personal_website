<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index(){


        $files = Storage::disk('avatars')->files();

        $public_paths = [];

        foreach($files as $file)
            $public_paths[] = Storage::disk('avatars')->url($file);

        return view('index', ['files' => $public_paths]);
    }
    //
}
