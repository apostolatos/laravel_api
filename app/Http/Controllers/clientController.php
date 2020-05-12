<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients', [
            'clients' => \App\Models\Client::all()
        ]);
    }
}
