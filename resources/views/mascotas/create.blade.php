<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Mascotas</title>
    <style>
        body {
            background-color: #87CEEB; /* Azul cielo */
            font-family: Arial, sans-serif;
            margin: 0; /* Añadido para eliminar el margen predeterminado */
            padding: 0; /* Añadido para eliminar el relleno predeterminado */
            position: relative; /* Establecer posición relativa para alinear el recuadro */
        }

        .titulo {
            background-color: #87CEEB; /* Azul cielo */
            color: white; /* Color del texto blanco */
            text-align: center; /* Alinear el texto al centro */
            padding: 20px 0; /* Espaciado interno arriba y abajo */
            font-size: 4em; /* Tamaño de fuente grande */
            margin-bottom: 20px; /* Espaciado inferior */
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto; /* Centrar horizontalmente */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Estilos del recuadro en la esquina inferior derecha */
        .recuadro {
            position: fixed; /* Posición fija para que el recuadro no se desplace con el scroll */
            bottom: 20px; /* Ajuste vertical */
            right: 20px; /* Ajuste horizontal */
            width: 100px; /* Ancho del recuadro */
            height: 100px; /* Altura del recuadro */
            background-color: white; /* Color de fondo blanco */
            border-radius: 10px; /* Borde redondeado */
            border: 2px solid #ccc; /* Borde gris de 2px */
            overflow: hidden; /* Ocultar cualquier contenido que se desborde */
        }

        .recuadro img {
            width: 100%; /* Hacer que la imagen ocupe todo el espacio disponible */
            height: 100%; /* Hacer que la imagen ocupe todo el espacio disponible */
            object-fit: cover; /* Ajustar la imagen para cubrir el recuadro */
        }
    </style>
</head>
<body>

<h1 class="titulo">MASCOTA</h1> <!-- Título en el fondo azul -->

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
    
    <!-- Campo para la clave foránea 'dueno_id' -->
    <button type="submit">Guardar</button>
</form>

<div class="recuadro">
    <img src="https://previews.123rf.com/images/qoolio/qoolio1603/qoolio160300028/53841816-logo-mascota-concepto-m%C3%ADnima-vector-para-la-tienda-de-mascotas-o-en-un-hotel.jpg" alt="Mascotas">
</div> <!-- Recuadro en la esquina inferior derecha -->
<a href="{{ route('dashboard') }}" style="position: fixed; bottom: 20px; left: 20px; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Regresar al inicio</a>
</body>
</html>
