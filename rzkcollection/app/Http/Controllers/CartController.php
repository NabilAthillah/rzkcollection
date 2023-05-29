<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Variant;
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
        return view('cart.index');
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

    public function addToCart(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'variant_id' => 'required|exists:variants.id'
        ]);
    
        // Dapatkan ID pengguna dari session
        $userId = session('userId');
        // Cek apakah pengguna sudah memiliki keranjang
        $cart = Cart::where('userId', $userId)->first();
        if (!$cart) {
            // Jika belum memiliki keranjang, buat keranjang baru
            $cart = new Cart();
            $cart->userId = $userId;
            $cart->save();
        }
    
        // Dapatkan varian yang ingin ditambahkan ke keranjang
        $variantId = $request->variant_id;
        $variant = Variant::findOrFail($variantId);
    
        // Tambahkan varian ke keranjang
        $cart->variants()->attach($variant);
    
        return redirect()->route('cart.index')->with('variant', $variant);
    }
}
