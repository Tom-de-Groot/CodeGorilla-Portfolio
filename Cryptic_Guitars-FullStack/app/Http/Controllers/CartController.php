<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia('/cart', [
            'cart' => session()->get('cart', [])
        ]);
    }

    public function addToCart ($id) 
    {
        $product = Product::find($id);
        $cart = session()->get('cart');
        // if basket is empty then this the first item
        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "product_qty" => 1,
                    "price" => $product->price,
                ]
            ];
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        // if cart is not empty then check if this item exist then increment item_qty
        if(isset($cart[$id])) {
            $cart[$id]['product_qty']++;
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        // if item not exist in basket then add to basket with item_qty = 1
        $cart[$id] = [
            "name" => $product->name,
            "product_qty" => 1,
            "price" => $product->price,
        ];
        session()->put('cart', $cart);
        return redirect('/cart');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        // if basket is empty return cart
        if(!$cart) {
            return redirect('/cart');
        }
        // if cart is not empty then check if this item exist then decrement item_qty and remove when below 0
        if(isset($cart[$id])) {
            $cart[$id]['product_qty']--;
            if ($cart[$id]['product_qty'] <= 0) {
                //quant=0 remove product from cart
                unset($cart[$id]);
            }
            session()->put('cart', $cart);
            return redirect('/cart');
        }
        // if item not exist in basket return cart
        return redirect('/cart');
    }

    public function removeCart()
    {
        session()->forget('cart');
        return redirect('/cart');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
