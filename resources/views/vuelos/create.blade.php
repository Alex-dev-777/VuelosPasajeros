<form action="{{ route('vuelos.store') }}" method="POST">
    @csrf

    <div>
        <label>Código:</label>
        <input type="text" name="codigo">
    </div>

    <div>
        <label>Origen:</label>
        <input type="text" name="origen">
    </div>

    <div>
        <label>Destino:</label>
        <input type="text" name="destino">
    </div>

    <div>
        <label>Fecha y Hora:</label>
        <input type="datetime-local" name="fecha_hora">
    </div>

    <div>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01">
    </div>

    <div>
        <button type="submit">Ingresar Vuelo</button>
    </div>
</form>
