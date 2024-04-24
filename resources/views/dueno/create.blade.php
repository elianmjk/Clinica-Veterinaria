<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Dueño</title>
    <style>
        /* Estilos CSS aquí */
    </style>
</head>
<body>

<form action="{{ route('duenos.store') }}" method="POST">
    @csrf 
    <label for="nombre">
        Nombre:
        <input type="text" id="nombre" name="nombre" required>
    </label>
    <br>
    <label for="apellido">
        Apellido:
        <input type="text" id="apellido" name="apellido" required>
    </label>
    <br>
    <label for="direccion">
        Dirección:
        <input type="text" id="direccion" name="direccion" required>
    </label>
    <br>
    <label for="telefono">
        Teléfono:
        <input type="text" id="telefono" name="telefono" required>
    </label>
    <br>
    <label for="email">
        Email:
        <input type="email" id="email" name="email" required>
    </label>
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>
