@extends('dashboard')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <form class="mx-8 p-2 text-sm font-bold text-transform: uppercase" action="/client/create" method="post">
        @csrf
        
        Name: <input type="text" name="name" class="bg-white border shadow-sm border-zinc-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-6/12 rounded-md sm:text-sm focus:ring-1"><br><br>
        Surname: <input type="text" name="surname" class="bg-white border shadow-sm border-zinc-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-6/12 rounded-md sm:text-sm focus:ring-1"><br><br>
        E-mail: <input type="text" name="email" class="bg-white border shadow-sm border-zinc-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-6/12 rounded-md sm:text-sm focus:ring-1"><br><br>
        Address: <input type="text" name="address" class="bg-white border shadow-sm border-zinc-200 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-6/12 rounded-md sm:text-sm focus:ring-1"><br><br>
        <input class="p-2 bg-slate-300 text-sm font-bold rounded-md" type="submit">
    </form>

    <br>

    <a class="mx-10 p-2 bg-slate-200 text-xs font-bold rounded-md" href="{{ route('clients.index') }}">
        ←
    </a>
@endsection