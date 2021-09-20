<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    public function addProduct(Request $req)
    {
    
        $product = new Device;
        // $req->file('file')->store('products');
        $product->device_name=$req->input('device_name');
        $product->description=$req->input('description');             
        $product->save();
        return $product;
        // return "hello";
    }

    // function list ()
    // {
    //     $product = new Product;
    //     return Product::all();
    // }
    // function delete ($id)
    // {
    //      //$product = new Product;
    //     $res = Product:: where('id',$id)->delete();
    //     if($res){
    //         return ["res"=>"Data has been deleted"];
    //     }
    //     else{
    //        return ["res"=>"Something wrong!!"]; 
    //     }
    // }
    // function getItem ($id)
    // {
    //      return Product::find($id);
    // }

    // function UpdateItem ($id, Request $req)
    // {
    //     // $product = new Product;
    //     $product = Product:: find($id);
    //     $product->ProductName=$req->input('name');
    //     $product->price=$req->input('price'); 
    //     $product->description=$req->input('description');
    //     if($req->file('file'))
    //     {
    //         $product->file_path=$req->file('file')->store('products'); 
    //     }                    
    //     $product->save();
    //     return $product;
    // }
    // function search ($query)
    // {
    //     return Product:: where('ProductName','LIKE',"%$query%")->get();
    // }
}
