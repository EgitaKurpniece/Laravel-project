<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index ()
    {
        $client = Client::get();
        dd($client);
    }
}
