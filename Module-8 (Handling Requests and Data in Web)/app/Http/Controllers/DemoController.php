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
}
