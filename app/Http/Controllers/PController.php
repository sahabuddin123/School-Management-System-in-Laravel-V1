<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PController extends Controller
{
    //
    public function getUrlData(Request $request){
        echo "Name: ".$request->name." <br> Age: ".$request->age;
    }
}
