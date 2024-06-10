<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function Checkout(Request $request)
    {
        $user = Session::get('user');
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }

        // Fetch cart items for the logged-in user
        $cart_items = DB::table('Cart')
            ->join('product', 'Cart.id_product', '=', 'product.id_product')
            ->where('Cart.id_user', $user->id_user)
            ->select('product.*', 'Cart.quantity')
            ->get();

        // Calculate subtotal
        $subtotal = 0;
        foreach ($cart_items as $item) {
            $subtotal += $item->price_unit * $item->quantity;
        }

        return view('checkout', ['cart_items' => $cart_items, 'subtotal' => $subtotal]);
    }

    public function placeOrder(Request $request)
    {
        $user = Session::get('user');
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to login first.');
        }

        // Validate the request
        $request->validate([
            'shipping_address' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        // Fetch cart items for the logged-in user
        $cart_items = DB::table('Cart')
            ->join('product', 'Cart.id_product', '=', 'product.id_product')
            ->where('Cart.id_user', $user->id_user)
            ->select('product.*', 'Cart.quantity')
            ->get();

        // Calculate subtotal and total amount
        $subtotal = 0;
        foreach ($cart_items as $item) {
            $subtotal += $item->price_unit * $item->quantity;
        }
        $tax_amount = $subtotal * 0.1; // Assuming 10% tax
        $shipping_cost = 50.00; // Assuming fixed shipping cost
        $total_amount = $subtotal + $tax_amount + $shipping_cost;

        // Insert order into the Orders table
        $order_id = DB::table('Orders')->insertGetId([
            'id_user' => $user->id_user,
            'subtotal' => $subtotal,
            'tax_amount' => $tax_amount,
            'shipping_cost' => $shipping_cost,
            'total_amount' => $total_amount,
            'quantity_ordered' => $cart_items->sum('quantity'),
            'order_date' => now(),
            'order_status' => 'Pending',
        ]);

        // Insert order details into the order_detail table
        foreach ($cart_items as $item) {
            DB::table('order_detail')->insert([
                'order_id' => $order_id,
                'id_product' => $item->id_product,
            ]);
        }

        // Clear the cart
        DB::table('Cart')->where('id_user', $user->id_user)->delete();

        // Redirect to a success page
        return redirect()->route('checkout.success')->with('success', 'Order placed successfully!');
    }

    public function success()
    {
        return view('checkout-success');
    }
}
