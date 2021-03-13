<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //return 'this is the list of products';
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
