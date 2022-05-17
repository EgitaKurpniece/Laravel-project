<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index (): View
    {
        return view('clients.index', [
            'clients' => Client::get(),
        ]);
    }

    public function create(): View
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        $client = new Client([
            'name' => $requestData['name'],
            'surname' => $requestData['surname'],
            'email' => $requestData['email'],
            'address' => $requestData['address'],
        ]);
        $client->save();
        // $client->name = $requestData['name'];
        // $client->surname = $requestData['surname'];
        // $client->email = $requestData['email'];
        // $client->address = $requestData['address'];
       //  $client->save();

        return redirect()->route('clients.show', ['client' => $client]);
    }

    public function show(Client $client): View
    {
        return view('clients.show', [
            'client' => $client,
        ]);
    }

    public function edit(Client $client): View
    {
        return view('clients.edit', [
            'client' => $client,
        ]);
    }

    public function update(Request $request, Client $client)
    {
        $requestData = $request->all();

        $client->name = $requestData['name'];
        $client->surname = $requestData['surname'];
        $client->email = $requestData['email'];
        $client->address = $requestData['address'];
        $client->save();
    
        return redirect()->route('clients.show', ['client' => $client]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
