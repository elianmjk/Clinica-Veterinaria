<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Mascotas</title>
    <style>
        /* Estilos CSS aquí */
    </style>
</head>
<body>

<form action="{{ route('mascotas.store') }}" method="POST">
    @csrf 
    <label for="nombre">
        Nombre:
        <input type="text" id="nombre" name="nombre" required>
    </label>
    <br>
    <label for="dueno_id">
        Dueño_ID:
        <input type="text" id="dueno_id" name="dueno_id" required>
    </label>
    <br>
    <label for="especie">
        Especie:
        <input type="text" id="especie" name="especie" required>
    </label>
    <br>
    <label for="raza">
        Raza:
        <input type="text" id="raza" name="raza" required>
    </label>
    <br>
    <label for="edad">
        Edad:
        <input type="number" id="edad" name="edad" required>
    </label>
    <br>
    <label for="dueno_id">Propietario:</label>
    <select id="dueno_id" name="dueno_id">
        <option value="">choose one</option>
        @foreach($duenos as $dueno)
            <option value="{{$dueno->id}}">{{$dueno->nombre}}</option>
        @endforeach
    </select>
    <br>
    
    <!-- Campo para la clave foránea 'dueno_id' -->
    <button type="submit">save</button>
</form>

</body>
</html>
