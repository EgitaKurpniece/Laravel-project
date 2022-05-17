<form action="/client/edit/{{$client->id}}" method="POST">
    @csrf
    
    Name: <input type="text" name="name" value="{{ $client->name }}"><br>
    Surname: <input type="text" name="surname" value="{{ $client->surname }}"><br>
    E-mail: <input type="text" name="email" value="{{ $client->email }}"><br>
    Address: <input type="text" name="address" value="{{ $client->address }}"><br>
    <input type="submit">
</form>

<a href="{{ route('clients.index') }}">
    Back to index
</a>