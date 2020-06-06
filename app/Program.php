<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //


    public function getCodeAttribute($value){

        $temp = str_replace('"', '\"', $value);

        return str_replace("\n", "\\n", $temp);
    }




}
