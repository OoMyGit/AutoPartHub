<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function wishlist(Request $request)
    {
        // Get the user ID from the session
        $user_id = Session::get('user')->id_user;
    
        // Fetch wishlist items for the current user
        $wishlist_items = DB::table('wishlist')
            ->join('product', 'wishlist.id_product', '=', 'product.id_product')
            ->where('wishlist.id_user', $user_id)
            ->select('product.*')
            ->get();

        return view('wishlist', ['wishlist_items' => $wishlist_items]);
    }

    public function addToWishlist(Request $request)
    {
        // Retrieve product ID from the request
        $product_id = $request->input('id_product');

        // Get the user ID from the session
        $user_id = Session::get('user')->id_user;

        // Check if the item already exists in the wishlist
        $existingItem = DB::table('wishlist')
            ->where('id_user', $user_id)
            ->where('id_product', $product_id)
            ->first();

        // If the item does not exist, add it to the wishlist
        if (!$existingItem) {
            DB::table('wishlist')->insert([
                'id_product' => $product_id,
                'id_user' => $user_id,
            ]);
            return redirect()->back()->with('message', 'item successfuly added to wishlist');
        }
        else {
            return redirect()->back()->with('message', 'item already in wishlist');
        }

   
    }

    public function removeFromWishlist(Request $request)
    {
        // Retrieve product ID from the request
        $product_id = $request->input('id_product');

        // Get the user ID from the session
        $user_id = Session::get('user')->id_user;

        // Remove the item from the wishlist
        DB::table('wishlist')
            ->where('id_user', $user_id)
            ->where('id_product', $product_id)
            ->delete();

            return redirect()->back()->with('message', 'item already deleted');
    }
}
