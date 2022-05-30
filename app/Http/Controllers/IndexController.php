<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'clients' => Client::get(),
        ]);
    }

    public function show(Client $client)
    {
        return view('show', [
            'client' => $client,
        ]);
    }
}