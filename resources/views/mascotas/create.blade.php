<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Mascotas</title>
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
    <!-- Campo para la clave foránea 'dueno_id' -->
    <button type="submit">Enviar</button>
</form>

</body>
</html>
