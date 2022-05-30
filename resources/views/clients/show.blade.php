@extends('dashboard')

@section('content')
    <p class="mx-8 p-2 text-left text-xl font-bold text-transform: uppercase underline underline-offset-4">Client</p><br>
    <p class="mx-8 p-2 text-left text-sm font-bold">{{ $client->id }}</p>
    <p class="mx-8 p-2 text-left text-lg font-bold">{{ $client->name }}</p>
    <p class="mx-8 p-2 text-left text-lg font-bold">{{ $client->surname }}</p>
    <p class="mx-8 p-2 text-left text-base font-light">{{ $client->email }}</p>
    <p class="mx-8 p-2 text-left text-base font-light"> {{ $client->address }}</p>
    <br><br>

    <p class="mx-6 p-4 text-left text-sm font-bold text-transform: uppercase text-slate-600">Comments</p>

    @foreach($client->comments as $comment)
        <div class="comment">
            <p class="mx-10 text-left text-sm font-bold text-slate-600"> {{ $comment->author }} </p>
            <p class="mx-10 text-left text-sm font-light text-slate-600"> {{ $comment->body }} </p><br>
        </div>
    @endforeach

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <form action="/comments/store" method="POST">
        @csrf

        <div class="form-input">
            <input class="mx-10 bg-white border shadow-sm border-zinc-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-4/12 rounded-md sm:text-sm focus:ring-1" type="text" placeholder="Author name" name="author">
        </div>
        <div class="form-input">
            <textarea class="mx-10 bg-white border shadow-sm border-zinc-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-4/12 rounded-md sm:text-sm focus:ring-1" name="body" placeholder="Comment body"></textarea>
        </div>
        <input type="hidden" value={{ $client->id }} name="commentable_id">
        <input type="hidden" value={{ get_class($client) }} name="commentable_type"><br>
        <input class="mx-10 p-2 bg-slate-300 text-sm font-bold rounded-md" type="submit">
    </form>

    <br>

    <a class="mx-10 p-2 bg-slate-200 text-xs font-bold rounded-md" href="{{ route('clients.index') }}">
        ←
    </a>
@endsection