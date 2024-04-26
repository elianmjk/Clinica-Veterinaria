<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado de la vista -->
</head>
<body>
    <h1>Crear Visita</h1>
    <form method="POST" action="{{ route('visitas.store') }}">
        @csrf
        <label for="mascota_id">Mascota</label>
        <select name="mascota_id" id="mascota_id">
            @foreach($mascotas as $mascota)
                <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
            @endforeach
        </select><br>
        <label for="fecha_visita">Fecha de Visita</label>
        <input type="date" id="fecha_visita" name="fecha_visita"><br>
        <label for="motivo">Motivo</label>
        <input type="text" id="motivo" name="motivo"><br>
        <label for="tratamiento">Tratamiento</label>
        <input type="text" id="tratamiento" name="tratamiento"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
