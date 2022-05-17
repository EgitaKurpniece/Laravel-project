<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <th>{{ $client->id }}</th>
                <th>{{ $client->name }}</th>
                <th>{{ $client->surname }}</th>
                <th>{{ $client->email }}</th>
                <th>{{ $client->address }}</th>
                <td>
                    <a href="{{ route('clients.create') }}">
                        Create
                    </a>
                    <a href="{{ route('clients.show', ['client' => $client->id]) }}">
                        Show
                    </a>
                    <a href="{{ route('clients.edit', ['client' => $client->id ]) }}">
                        Edit
                    </a>
                    <a href="{{ route('clients.delete', ['client' => $client->id ]) }}">
                        Delete
                    </a>
            </tr>
        @endforeach
    </tbody>
</table>