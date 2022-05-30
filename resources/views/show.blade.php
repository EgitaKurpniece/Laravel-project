@extends('dashboard')

@section('content')
    <div class="client">
        <h2> {{ $client->name }} </h2>
        <a href="/client/show/{{$client->id}}">
            <h2> {{ $client->surname }} </h2>
        </a>
        <p> {{ $client->email }} </p>
        <p> {{ $client->address }} </p>
        <span> {{ $client->comments()->count() }} </span>
    </div>
@endsection