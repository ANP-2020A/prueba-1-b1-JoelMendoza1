<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index(){
        return Customers::all();
    }

    public function show($id){
        return Customers::find($id);
    }

    public function store(Request $request){
        return Customers::create($request->all());
    }

    public function update(Request $request, $id){
        $customers = Customers::findOrFail($id);
        $customers->update($request->all());
        return$customers;
    }
    public function delete(Request $request, $id){
        $customer=Customers::find($id);
        $customer->delete();
        return204;
    }
}
