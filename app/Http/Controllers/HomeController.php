<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;

class HomeController extends Controller
{
    public function index()
    {
        $products = HomeModel::all();
        $time = date('H');

        return view('home', compact('time', 'products'));
    }
}
