<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado de la vista -->
</head>
<body>
    <h1>Editar Visita</h1>
    <form method="POST" action="{{ route('visitas.update', ['visita' => $visita->id]) }}">
        @csrf
        @method('PUT')
        <label for="mascota_id">Mascota</label>
        <select name="mascota_id" id="mascota_id">
            @foreach($mascotas as $mascota)
                <option value="{{ $mascota->id }}" {{ $visita->mascota_id == $mascota->id ? 'selected' : '' }}>{{ $mascota->nombre }}</option>
            @endforeach
        </select><br>
        <label for="fecha_visita">Fecha de Visita</label>
        <input type="date" id="fecha_visita" name="fecha_visita" value="{{ $visita->fecha_visita }}"><br>
        <label for="motivo">Motivo</label>
        <input type="text" id="motivo" name="motivo" value="{{ $visita->motivo }}"><br>
        <label for="tratamiento">Tratamiento</label>
        <input type="text" id="tratamiento" name="tratamiento" value="{{ $visita->tratamiento }}"><br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
