<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    //
    public function index()
    {
        $products = Products::all();
        // dd($products[0]->name);
        return view('Pages.Home')->with('products',$products);
    }

    public function getAddToCart(Request $request,$id)
    {
        # code...
        $product= Products::find($id);
        $oldcart= Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldcart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('homes');
    }

    public function getCart()
    {
        # code...
        if(!Session::has('cart')){
            return view('pages.ShoppingCart');
        }
        $oldcart=Session::get('cart');
        return view('pages.ShoppingCart')->with('products',$oldcart->items)->with('totlaQty',$oldcart->totalQty)->with('totalPrice',$oldcart->totalPrice);

    }

    public function getCheckout()
    {
        # code...
        if(!Session::has('cart')){
            return view('pages.ShoppingCart');
        }
        $oldcart=Session::get('cart');
        return view('pages.ShoppingCart')->with('products',$oldcart->items)->with('totlaQty',$oldcart->totalQty)->with('totalPrice',$oldcart->totalPrice);

    }
}
