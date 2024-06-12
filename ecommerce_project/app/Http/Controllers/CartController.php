<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function delete_cart($id)
    {
        $cart = Cart::find($id);

        if ($cart && $cart->user_id == Auth::id()) {
            $cart->delete();
            return redirect()->back()->with('success', 'Cart item removed successfully.');
        } else {
            return redirect()->back()->with('error', 'Unable to remove cart item.');
        }
    }
}
