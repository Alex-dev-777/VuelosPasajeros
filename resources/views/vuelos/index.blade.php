<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha y Hora</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vuelos as $vuelo)
            <tr>
                <td>{{ $vuelo->codigo }}</td>
                <td>{{ $vuelo->origen }}</td>
                <td>{{ $vuelo->destino }}</td>
                <td>{{ $vuelo->fecha_hora }}</td>
                <td>${{ $vuelo->precio }}</td>
                <td>
                    <a href="{{ route('vuelos.edit', $vuelo->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
