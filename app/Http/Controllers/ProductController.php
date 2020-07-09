<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return Products::all();
    }

    public function show($id){
        return Products::find($id);
    }

    public function store(Request $request){
    return Products::create($request->all());
    }

    public function update(Request $request, $id){
    $product = Products::findOrFail($id);
    $product->update($request->all());

    return$product;
    }
    public function delete(Request $request, $id){
        $product=Products::find($id);
        $product->delete();
        return204;
    }

}
