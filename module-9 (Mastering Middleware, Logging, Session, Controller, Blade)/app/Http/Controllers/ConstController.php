<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstController extends Controller
{
    function __construct(){
        // $this->middleware('demo');
    }

    function ManRequest( Request $request ): array {
        return $request->header();
    }
}
