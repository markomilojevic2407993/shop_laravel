<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $time = date('H');

        return view('home', compact('time'));
    }
}
