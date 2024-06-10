<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    public function ProductDetails(Request $request, $id)
    {
        // Fetch product details using raw SQL query
        $product = DB::table('product')->where('id_product', $id)->first();

        if (!$product) {
            abort(404, 'Product not found');
        }
        $other = DB::table('product')->where('id_product', '!=', $id)->limit(5)->get();
        return view('product-details2', ['product'=>$product, 'other' =>$other]);
    }
    
   
}
