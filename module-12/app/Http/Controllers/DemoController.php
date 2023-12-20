<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
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

    public function increDecrement( Request $request ) {
        return Product::where( 'id', 1 )->increment( 'price', 100 );
        // return Product::where( 'id', 1 )->increment( 'price' );
        // return Product::where( 'id', 1 )->decrement( 'price', 100 );
    }

    public function getAll( Request $request ) {
        // return Brand::get();
        return Brand::all();
    }

    public function singleRow( Request $request ) {
        return Brand::first();
        // return Brand::find( 2 );
    }

    public function columnList( Request $request ) {
        // return Product::pluck( 'price' );
        return Product::pluck( 'price', 'title' );
    }

    public function aggregate( Request $request ) {
        return Product::sum( 'price' );
        // return Product::avg( 'price' );
        // return Product::max( 'price' );
        // return Product::min( 'price' );
        // return Product::count( 'price' );
    }

    public function select( Request $request ) {
        // return Product::select( 'title', 'price', 'star' )->get();
        return Product::select( 'title' )->distinct()->get();
    }

}
