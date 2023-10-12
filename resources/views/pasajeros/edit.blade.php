<form action="{{ route('pasajeros.update', $pasajero->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $pasajero->nombre }}">
    </div>

    <div>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{ $pasajero->apellido }}">
    </div>

    <div>
        <label>Email:</label>
        <input type="text" name="email" value="{{ $pasajero->email }}">
    </div>

    <div>
        <label>Telefono:</label>
        <input type="text" name="telefono" value="{{ $pasajero->telefono }}">
    </div>

    <div>
        <button type="submit">Actualizar Pasajero</button>
    </div>
</form>
