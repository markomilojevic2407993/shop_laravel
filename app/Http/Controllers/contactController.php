<?php

namespace App\Http\Controllers;

use App\Models\contactModel;

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
}
