<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{

    public function index()
    {
        if (!Session::has('user')){
            return redirect()->route('login')->with("message", "Please LOGIN before doing an action!");
        }
        $user = Session::get('user');
        $userId = $user->id_user;
 
        $transactions = DB::table('Transaction')
            ->join('product', 'Transaction.id_product', '=', 'product.id_product')
            ->select('transaction.*', 'product.nama_product as product_name', 'product.price_unit as product_price')
            ->where('transaction.id_user', $userId)
            ->get();

        // Pass the transactions to the view
        return view('transaction', compact('transactions'));
    }
    public function checkout(Request $request)
    {
        
      
        $user = Session::get('user');
            $userId = $user->id_user;
        
          
        $productId = $request->input('id_product');
        $quantity = $request->input('quantity');
        $address = $user->address;

        $product = DB::table('product')
    ->select('id_product', 'price_unit')
    ->where('id_product', $productId)
    ->first();
    
   // dd($user, $productId, $quantity, $product);
    $price = $product->price_unit;

        $total_price = $price * $quantity;

        if ($quantity==null){
            return redirect()->back()->with('message', 'please add quantity');
        }
        //dd($productId, $quantity);
   
        DB::table('Transaction')->insert([
            'id_user' => $userId,
            'id_product' => $productId,
            'address' => $address,
            'quantity' => $quantity,
            'total_price' => $total_price,
        ]);

        // hapus cartnya
     
        DB::table('Cart')->where('id_user', $userId)->where('id_product', $productId)->delete();

        return redirect()->route('transactions.index')->with('message', 'Checkout successful!');
    }
}
