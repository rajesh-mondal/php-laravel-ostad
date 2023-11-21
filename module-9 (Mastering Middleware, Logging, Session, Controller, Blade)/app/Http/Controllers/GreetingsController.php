<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    function hello( Request $request ){
        return 'Hello World! ';
    }

    function hi( Request $request ){
        return 'Hi! ';
    }

    function greet( Request $request, $name ){
        print_r($request->all());
    }
}
