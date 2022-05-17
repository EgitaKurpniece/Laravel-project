<form action="/client/create" method="post">
    @csrf

    Name: <input type="text" name="name"><br>
    Surname: <input type="text" name="surname"><br>
    E-mail: <input type="text" name="email"><br>
    Address: <input type="text" name="address"><br>
    <input type="submit">
</form>

<a href="{{ route('clients.index') }}">
    Back to index
</a>