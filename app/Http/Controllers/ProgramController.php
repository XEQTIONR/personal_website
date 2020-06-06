<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Program;

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

        $themes = [];
        $syntaxes = [];

        $theme_files = array_filter($files, function($val){

            return preg_match( "/theme-.+.js/", $val);
        });

        $syntax_files = array_filter($files, function($val){
            return preg_match( "/mode-.+.js/", $val);
        });




        foreach($theme_files as $val)
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

        foreach($syntax_files as $val)
        {
            //remove teminating ".js"
            $name = substr($val, 0, strlen($val) -3);

            //remove starting "theme-"
            $name = substr($name, 5, strlen($name));

            //replace underscores with spaces
            $name = str_replace('_', ' ', $name);

            // Capitalize words
            $name = ucwords($name);

            $url = Storage::disk('ace')->url($val);

            $syntax_id = substr(str_replace('-', '/', $url), 1 ,strlen($url) -4);


            array_push($syntaxes, compact('name', 'url', 'syntax_id'));
        }

       // $syntaxes = collect($syntaxes)->sortBy('name')->toArray();

        //dd($syntaxes);


        //return $themes;
        //dd($themes);
        return view('programs', compact('themes', 'syntaxes'));
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
        $response = array();

        try {
            $program=new Program();

            $program->title=$request->input('title');
            $program->description=$request->input('descriptionText');
            $program->code=$request->input('code');
            $program->language=$request->input('lang');

            $program->save();



            $response['status'] = 'success';
            $response['data'] = $program;
        }
        catch(\Exception $e){

            $response['status'] = 'error';
            $response['error'] = $e->getMessage();


        }

        return $response;
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
