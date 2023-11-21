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
}
