<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;

class ShopController extends Controller
{
    public function index()
    {
        $allProducts = ShopModel::orderBy('id', 'desc')->take(6)->get();

        return view('shop', compact('allProducts'));
    }
}
