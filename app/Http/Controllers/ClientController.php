<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
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

    public function store(StoreClientRequest $storeClientRequest)
    {
        $validatedData = $storeClientRequest->validated();

        $client = new Client([
            'name' => $validatedData['name'],
            'surname' => $validatedData['surname'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
        ]);

        $client->save();

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

    public function update(UpdateClientRequest $updateClientRequest, Client $client)
    {
        $validatedData = $updateClientRequest->validated();

        $client->name = $validatedData['name'];
        $client->surname = $validatedData['surname'];
        $client->email = $validatedData['email'];
        $client->address = $validatedData['address'];
        $client->save();
    
        return redirect()->route('clients.show', ['client' => $client]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
