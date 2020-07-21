<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->paginate(16);
        return view('site.index', compact('products'));
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('site.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addToCart(Product $product)
    {
        $cart = session()->get('cart');
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = $product->toArray();
            $cart[$product->id]['quantity'] = 1;
        }
        session()->put('cart', $cart);
        return back()->with('success', 'Added to cart.');
    }

    public function viewCart()
    {
        $cart = session()->get('cart');
        return view('site.cart', compact('cart'));
    }

    public function increaseCart($id)
    {
        $cart = session()->get('cart');
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return back();
    }

    public function decreaseCart($id)
    {
        $cart = session()->get('cart');
        if ($cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
        } else {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return back();
    }

    public function removeCart($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return back();
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect('/');
    }

    public function order()
    {
        session()->forget('cart');
        return view('site.order');
    }
}
