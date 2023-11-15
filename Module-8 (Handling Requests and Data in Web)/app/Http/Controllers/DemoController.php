<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller {
    function demoAction( Request $request ): array {
        // $name = $request->input("name");
        // $age = $request->input("age");
        // return "My name is ${name} and age is ${age}";

        // return $request->input();

        // $name = $request->header('name');
        // $age = $request->header('age');

        // return "My name is ${name} and age is ${age}";

        // return "This is my first request-response";

        $pin = $request->header( 'pin' );
        $city = $request->input( 'city' );
        $postcode = $request->input( 'postcode' );
        $name = $request->name;
        $age = $request->age;

        return array( 
            "pin" => $pin,
            "city"=> $city,
            "postcode"=> $postcode,
            "name"=> $name,
            "age"=> $age,
         );
    }
}
