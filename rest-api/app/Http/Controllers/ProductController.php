<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //menampilkan seluruh data
    public function index(){
        $products = Product::all();

        return response()->json([
            "message"=> "berhasil",
            "status" => 200,
            "products" => $products
        ]);
    }
}
