<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller {
    function DemoAction( Request $request ): int {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;

        Log::info( $sum );

        return $sum;
    }

    function SessionPut( Request $request ): bool {
        $email = $request->email;
        $request->session()->put( 'userEmail', $email );
        return true;
    }

    function SessionPull( Request $request ): string {
        return $request->session()->pull( 'userEmail', 'default' );
    }

    function SessionGet( Request $request ): string {
        return $request->session()->get( 'userEmail', 'default' );
    }

    function SessionForget( Request $request ): bool {
        $request->session()->forget( 'userEmail' );
        return true;
    }

    function SessionFlush( Request $request ): bool {
        $request->session()->flush();
        return true;
    }

    // Request Verfication
    function RequestVerification(): string {
        return "Hello";
    }

    // Request Redirect
    function Redirect1(): string {
        return "Hello1";
    }

    function Redirect2(): string {
        return "Hello2";
    }

    /* function Route1():string{
    return "Hello1";
    }
    function Route2():string{
    return "Hello2";
    }
    function Route3():string{
    return "Hello3";
    }
    function Route4():string{
    return "Hello4";
    } */

    function ManuRequest( Request $request ): array {
        return $request->header();
    }
    //Rate Limit
    function RateLimit( Request $request ): string {
        return "Hello";
    }

}
