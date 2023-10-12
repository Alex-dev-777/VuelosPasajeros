<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pasajeros as $pasajero)
            <tr>
                <td>{{ $pasajero->nombre }}</td>
                <td>{{ $pasajero->apellido }}</td>
                <td>{{ $pasajero->email }}</td>
                <td>{{ $pasajero->telefono }}</td>
                <td>
                    <a href="{{ route('pasajeros.edit', $pasajero->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
