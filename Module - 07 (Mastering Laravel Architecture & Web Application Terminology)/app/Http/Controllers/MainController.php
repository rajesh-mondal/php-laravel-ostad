<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function sayHi(){
        return "Hi! Welcome to MainController";
    }

    function hello(){
        return "Hello World";
    }

    function greet( $name = "World" ){
        return "Hello $name";
    }

    function samplePostRequest( Request $request ){
        // return $request->all();
        // return "POST REQUEST";
        return $request->input("person");
    }

    function sampleGetRequest( Request $request ){
        // return $request->all();
        // return "GET REQUEST";
        return "<form method='POST' action='/form'>
        <input type='text' name='person' placeholder='Enter your name'>
        <input type='submit' value='Submit'>
        </form>";
    }
}
