<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products= Product::all();
        //$products= DB::table('products')->get();
        //return $products;
        dd($products);
        return view('products.index');
    }

    public function create(){
        return 'this is the form to create product';
    }
    public function store(){
        //
    }
    public function show($product){
        //return "showing product whit id {$product}";
        // $product= DB::table('products')->where('id', $product)->first();
        //$product= DB::table('products')->find($product);
        $product = Product::findOrFail($product);
        dd($product);
        return view('products.show');
    }
    public function edit($product){
        return "showing the form to edit product whit id {$product}";
    }
    public function update($product){
        //
    }
    public function destroy($product){
        //
    }
}
