<form action="{{ route('vuelos.update', $vuelo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Código:</label>
        <input type="text" name="codigo" value="{{ $vuelo->codigo }}">
    </div>

    <div>
        <label>Origen:</label>
        <input type="text" name="origen" value="{{ $vuelo->origen }}">
    </div>

    <div>
        <label>Destino:</label>
        <input type="text" name="destino" value="{{ $vuelo->destino }}">
    </div>

    <div>
        <label>Fecha y Hora:</label>
        <input type="datetime-local" name="fecha_hora" value="{{ $vuelo->fecha_hora->format('Y-m-d\TH:i') }}">
    </div>

    <div>
        <label>Precio:</label>
        <input type="number" name="precio" step="0.01" value="{{ $vuelo->precio }}">
    </div>

    <div>
        <button type="submit">Actualizar Vuelo</button>
    </div>
</form>
