@extends('dashboard')

@section('content')
<div class="bg-white shadow-sm sm:rounded mx-8">
    <div class="p-4">
        <a class="p-2 bg-green-300 text-sm font-bold rounded-md" href="{{ route('clients.create') }}">
        Create
        </a>
    </div>

    <div class="p-2">
        <table>
            <thead>
                <th class="p-4 text-left font-bold ">ID</th>
                <th class="p-4 text-left font-bold text-transform: uppercase">Name</th>
                <th class="p-4 text-left font-bold text-transform: uppercase">Surname</th>
                <th class="p-4 text-left font-bold text-transform: uppercase">E-mail</th>
                <th class="p-4 text-left font-bold text-transform: uppercase">Address</th>
                <th class="p-4 text-left font-bold text-transform: uppercase">Actions</th>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <th class="p-4 text-left text-sm font-light border-y-2 border-zinc-200">{{ $client->id }}</th>
                        <th class="p-4 text-left text-sm font-bold border-y-2 border-zinc-200">{{ $client->name }}</th>
                        <th class="p-4 text-left text-sm font-bold border-y-2 border-zinc-200">{{ $client->surname }}</th>
                        <th class="p-4 text-left text-sm font-light border-y-2 border-zinc-200">{{ $client->email }}</th>
                        <th class="p-4 text-left text-sm font-light border-y-2 border-zinc-200">{{ $client->address }}</th>
                        <td class="border-y-2 border-zinc-200 space-x-2">
                            <a class="bg-slate-200 text-xs font-bold p-2 rounded-md" href="{{ route('clients.show', ['client' => $client->id]) }}">
                                Show
                            </a>
                            <a class="bg-slate-300 text-xs font-bold p-2 rounded-md" href="{{ route('clients.edit', ['client' => $client->id ]) }}">
                                Edit
                            </a>
                            <a class="bg-red-200 text-xs font-bold p-2 rounded-md" href="{{ route('clients.delete', ['client' => $client->id ]) }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection