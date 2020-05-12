<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($from_date = null, $to_date = null)
    {   
        if ($from_date && $to_date) {
            $clients = \App\Models\Client::with(['last_payment' => function($query) use ($from_date, $to_date) {
                $query->whereBetween('created_at', [$from_date, $to_date])->get();
            }])->get();
        }
        else {
            $clients = \App\Models\Client::all();
        }

        return view('clients', [
            'clients' => $clients,
            'from_date' => $from_date,
            'to_date' => $to_date
        ]);
    }

    public function submit(Request $request) 
    {   
        $errors = [];

        $this->validate($request, [
            'from_date' => 'required|date',
            'to_date' => 'required|date'
        ]);

        if ($errors) {
            return \Redirect::back()->withErrors($errors);
        }

        return \Redirect::to($request->from_date.'/'.$request->to_date);
    }
}
