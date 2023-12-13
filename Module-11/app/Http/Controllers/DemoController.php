<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller {
    function DemoAction() {
        $result = DB::table( 'products' )->get();
        return $result;
    }

    // find method
    function singleRow() {
        $result = DB::table( 'brands' )->find( 2 );
        return $result;
    }

    // first method
    // function singleRow(){
    //     $result = DB::table('brands')->first();
    //     return $result;
    // }

    // pluck method
    // function singleRow(){
    //     $result = DB::table('brands')->pluck('brandName', "id");
    //     return $result;
    // }

    // Aggregates method
    function aggregates() {
        $count = DB::table( 'products' )->count();
        $max = DB::table( 'products' )->max( 'price' );
        $min = DB::table( 'products' )->min( 'price' );
        $avg = DB::table( 'products' )->avg( 'price' );
        $sum = DB::table( 'products' )->sum( 'price' );
        return ['count' => $count, 'max' => $max, 'min' => $min, 'avg' => $avg, 'sum' => $sum];
    }

    function selectClauses() {
        $result = DB::table( 'products' )->select( 'title', 'price', 'stock' )->get();
        // $result = DB::table( 'products' )->select( 'title' )->distinct()->get();
        return $result;
    }

    function innerJoin() {
        $products = DB::table( 'products' )
            ->join( 'categories', 'products.category_id', '=', 'categories.id' )
            ->join( 'brands', 'products.brand_id', '=', 'brands.id' )
            ->get();
        return $products;
    }

    function leftJoin() {
        $products = DB::table( 'products' )
            ->leftJoin( 'categories', 'products.category_id', '=', 'categories.id' )
            ->leftJoin( 'brands', 'products.brand_id', '=', 'brands.id' )
            ->get();
        return $products;
    }

    function crossJoin() {
        $result = DB::table( 'products' )
            ->crossJoin( 'brands' )
            ->get();

        return $result;
    }

    function advancedJoin() {
        $result = DB::table( 'products' )
            ->join( 'categories', function ( JoinClause $join ) {
                $join->on( 'products.category_id', '=', 'categories.id' )
                    ->where( 'products.price', '>', 2000 );
            } )->get();

        return $result;
    }

    function union() {
        $query = DB::table( 'products' )->where( 'products.price', '>', 2000 );
        $otherQuery = DB::table( 'products' )->where( 'products.discount', '=', 1 )->union( $query )->get();
        return $otherQuery;
    }
}
