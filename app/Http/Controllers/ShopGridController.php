<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopGridController extends Controller
{
    public function ShopGrid(Request $request)
    {
        $products = DB::table('product')->paginate(12); // Fetch 12 products per page
        return view('shop-grid', compact('products'));
        
    }

}
