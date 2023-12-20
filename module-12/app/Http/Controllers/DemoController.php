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

    public function whereClause( Request $request ) {
        // return Product::where( 'price', '=', '1000' )->get();
        // return Product::where( 'price', '>', '2000' )->get();
        // return Product::where( 'price', '!=', '2000' )->get();
        // return Product::where( 'title', 'LIKE', '%New%' )->get();
        // return Product::where( 'title', 'NOT LIKE', '%New%' )->get();
        // return Product::whereBetween( 'price', [1, 1000] )->get();
        // return Product::whereNotBetween( 'price', [1, 1000] )->get();
        // return Product::whereIn( 'price', [1, 1000] )->get();
        // return Product::whereNull( 'price' )->get();
        // return Product::whereNotNull( 'price' )->get();
        // return Product::whereDate( 'updated_at', '2023-12-20' )->get();
        // return Product::whereMonth( 'updated_at', '12' )->get();
        // return Product::whereDay( 'updated_at', '20' )->get();
        // return Product::whereYear( 'updated_at', '2023' )->get();
        // return Product::whereTime( 'updated_at', '04:21:17' )->get();
        return Product::whereColumn( 'updated_at', '>', 'created_at' )->get();
    }

    public function orderBy( Request $request ) {
        // return Product::orderBy( 'price' )->get();
        // return Product::orderBy( 'price', 'desc' )->get();
        // return Brand::inRandomOrder()->first();
        // return Brand::latest()->first();
        // return Brand::oldest()->first();
    }

    public function groupHaving( Request $request ) {
        // return Product::groupBy( 'price' )->get();
        // return Product::groupBy( 'price' )
        //     ->having('price', '>', 2000)
        //     ->get();
        return Product::skip( 10 )->take( 1 )->get();
    }

    public function paginate( Request $request ) {
        // return Product::simplePaginate(2);
        // return Product::paginate(2);
        return Product::paginate(
            $perPage = 10,
            $columns = ['*'],
            $pageName = 'ItemNumber',
        );
    }

}
