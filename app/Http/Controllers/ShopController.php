<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function index()
    {
        $products = ['samsong', 'xiomi', 'sony', 'iphon'];

        return view('shop', compact('products'));
    }
}
