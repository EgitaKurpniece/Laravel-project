show client
<br>
{{ $client->id }}
<br>
{{ $client->name }}
<br>
{{ $client->surname }}
<br>
{{ $client->email }}
<br>
{{ $client->address }}
<br>

<a href="{{ route('clients.index') }}">
    Back to index
</a>