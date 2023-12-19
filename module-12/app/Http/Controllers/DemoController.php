<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function create( Request $request ) {
        return Brand::create( $request->input() );
    }

    public function update( Request $request ) {
        return Brand::where( 'id', $request->id )->update( $request->input() );
    }

    public function updateOrCreate( Request $request ) {
        return Brand::updateOrCreate(
            ['brandName' => $request->brandName],
            $request->input()
        );
    }

    public function delete( Request $request ) {
        return Brand::where('id', '=', $request->id)->delete();
    }

}
