<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
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

    function requestFormat( Request $request ): array | int | string | null | bool {
        return array('A', 'B', 'C');
    }

    function jsonResponse( Request $request ):JsonResponse{
        $code = 201;
        $content = array('name'=>'Jack','city'=>'London');
        return response()->json($content, $code);
    }

    // for response redirect
    function demoAction1():string{
        return redirect('/hello2');
    }

    function demoAction2():string{
        return "Hello2";
    }

    function fileBinary(){
        $filePath = "upload/Capture.png";
        return response()->file( $filePath );
    }

    function fileDownload(){
        $filePath = "upload/Capture.png";
        return response()->download( $filePath );
    }
}
