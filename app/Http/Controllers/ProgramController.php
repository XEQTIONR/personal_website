<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $files = Storage::disk('ace')->files();


        $filtered = array_filter($files, function($val){

            return preg_match( "/theme-.+.js/", $val);
        });

        $themes = [];

        foreach($filtered as $val)
        {
            //remove teminating ".js"
            $name = substr($val, 0, strlen($val) -3);

            //remove starting "theme-"
            $name = substr($name, 6, strlen($name));

            //replace underscores with spaces
            $name = str_replace('_', ' ', $name);

            // Capitalize words
            $name = ucwords($name);

            $url = Storage::disk('ace')->url($val);

            $theme_id = substr(str_replace('-', '/', $url), 1 ,strlen($url) -4);

            array_push($themes, compact('name', 'url', 'theme_id'));
        }

        //return $themes;
        //dd($themes);
        return view('programs', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
