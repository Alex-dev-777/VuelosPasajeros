<form action="{{ route('pasajeros.store') }}" method="POST">
    @csrf

    <div>
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
    </div>

    <div>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{ old('apellido') }}">
    </div>

    <div>
        <label>Email:</label>
        <input type="text" name="documento" value="{{ old('documento') }}">
    </div>

    <div>
        <label>Telefono:</label>
        <input type="text" name="telefono" value="{{ old('telefono') }}">
    </div>

    <div>
        <button type="submit">Registrar Pasajero</button>
    </div>
</form>

@if($errors->any())
    <div>
        <strong>Error!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
