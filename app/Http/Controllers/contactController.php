<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allcontacts = contactModel::all();

        return view('getAllcontacts', compact('allcontacts'));
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'title' => 'required|string',
            'message' => 'required|string|min:5',
        ]);
        // Povezivanje sa bazom
        contactModel::create([
            'email' => $request->get('email'),
            'title' => $request->get('title'),
            'message' => $request->get('message'),
        ]);

        return redirect('/shop');
    }
}
