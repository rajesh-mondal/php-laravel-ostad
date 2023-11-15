<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller {
    function demoAction( Request $request ): bool {

        /* $photoFile = $request->file( "photo" );
        $fileSize = filesize( $photoFile );
        $fileType = filetype( $photoFile );
        $fileOriginalName = $photoFile->getClientOriginalName();
        $fileTempName = $photoFile->getFilename();
        $fileExtension = $photoFile->extension();

        return array(
        "fileSize" => $fileSize,
        "fileType" => $fileType,
        "fileOriginalName" => $fileOriginalName,
        "fileTempName" => $fileTempName,
        "fileExtension" => $fileExtension,
        ); */

        $photoFile = $request->file( "photo" );
        $photoFile->storeAs( "upload", $photoFile->getClientOriginalName() );
        $photoFile->move( public_path( "upload" ), $photoFile->getClientOriginalName() );

        return true;
    }

    function ipAddress( Request $request ): string {
        // for check IP
        // return $request->ip();

        if ( $request->accepts( ['text/html'] ) ) {
            return true;
        } else {
            return false;
        }
    }

    function cookie( Request $request ): string {
        return $request->cookie('Cookie_1');
    }
}
