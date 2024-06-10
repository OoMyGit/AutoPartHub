<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function Cart(Request $request)
        {

            
            $user = Session::get('user');

            $user_id = $user->id_user;
    
           
            $cart_items = DB::table('Cart')
                ->join('product', 'Cart.id_product', '=', 'product.id_product')
                ->where('Cart.id_user', $user_id)
                ->select('product.*', 'Cart.quantity')
                ->get();

            // Calculate subtotal
            $subtotal = 0;
            foreach ($cart_items as $item) {
                $subtotal += $item->price_unit * $item->quantity;
            }

            // Pass cart items and subtotal to the view
            return view('cart', ['cart_items' => $cart_items, 'subtotal' => $subtotal]);
        }

    public function store(Request $request)
    {
        if (Session::has('user')){
        $user = Session::get('user');
        $user_id = $user->id_user;
        $item_id = $request->input('id_product');
        //dd($user_id, $item_id);
        $existingItem = DB::table('Cart')
        ->where('id_user', $user_id)
        ->where('id_product', $item_id)
        ->first();  
            if (!$existingItem){
            DB::table('Cart')->insert([
                'id_product' => $item_id,
                'id_user' => $user_id,
                'quantity' => 1
            ]);
                return redirect()->back()->with('message', 'Item successfuly inserted in cart!');
              } else {
                return redirect()->back()->with('message', 'Item already in cart!');
              }
      
          }
        else {
            return redirect()->route('login')->with("message", "Please LOGIN before doing an action!");
        }
    }
    public function destroy($id)
    {
        $cartItem = DB::table('Cart')->where('id_product', $id)->first();
        if ($cartItem) {
            DB::table('Cart')->where('id_product', $id)->delete();
            return redirect()->route('cart')->with('message', 'Item removed from cart successfully.');
        }
       
    
    }
    public function update(Request $request)
    {
        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        // Update the cart in the database
        DB::table('Cart')
            ->where('id_user', auth()->id())
            ->where('id_product', $productId)
            ->update(['quantity' => $quantity]);

        return response()->json(['success' => true]);
    }

}