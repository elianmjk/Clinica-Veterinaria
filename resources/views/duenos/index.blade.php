<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Dueños</title>
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
            font-size: 2em; /* Tamaño de fuente grande */
            margin-bottom: 20px; /* Espaciado inferior */
        }

        .table-container {
            max-width: 1000px; /* Ajuste del ancho máximo de la tabla */
            margin: 20px auto;
            overflow-x: auto; /* Barra de desplazamiento horizontal si la tabla es demasiado ancha */
        }

        .table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse; /* Fusionar bordes de celda */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-right: 1px solid #ddd; /* Agregar línea gris a la derecha de cada celda */
        }

        .table th:last-child,
        .table td:last-child {
            border-right: none; /* No agregar línea gris a la última celda de cada fila */
        }

        .table th {
            background-color: #87CEEB; /* Azul cielo */
            color: white; /* Color del texto blanco */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Color de fondo gris claro para filas pares */
        }

        .table tbody tr:hover {
            background-color: #ddd; /* Color de fondo gris claro al pasar el mouse */
        }

        .edit-button,
        .delete-button {
            background-color: #28a745; /* Verde */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Eliminar subrayado del enlace */
        }

        .delete-button {
            background-color: #dc3545; /* Rojo */
            margin-left: 5px; /* Espaciado a la izquierda */
        }

        .create-button {
            position: fixed; /* Posición fija */
            bottom: 100px; /* Ajuste vertical */
            left: 20px; /* Ajuste horizontal */
            background-color: #1E90FF; /* Azul oscuro */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none; /* Eliminar subrayado del enlace */
        }

        .create-button:hover {
            background-color: #0066CC; /* Cambio de color al pasar el mouse */
        }

        .return-button {
            position: fixed; /* Posición fija */
            bottom: 20px; /* Ajuste vertical */
            left: 20px; /* Ajuste horizontal */
            background-color: #007bff; /* Azul brillante */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none; /* Eliminar subrayado del enlace */
        }

        .return-button:hover {
            background-color: #0056b3; /* Cambio de color al pasar el mouse */
        }

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

    <h1 class="titulo">Lista de Dueños</h1> <!-- Título en el fondo azul -->

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($duenos as $dueno)
                <tr>
                    <td>{{ $dueno->id }}</td>
                    <td>{{ $dueno->nombre }}</td>
                    <td>{{ $dueno->apellido }}</td>
                    <td>{{ $dueno->direccion }}</td>
                    <td>{{ $dueno->telefono }}</td>
                    <td>{{ $dueno->email }}</td>
                    <td class="button-container">
                        <button class="edit-button"><a style="color: white;" href="{{ route('duenos.edit', $dueno->id) }}">Editar</a></button>
                        <form action="{{ route('duenos.destroy', $dueno->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Recuadro con la imagen en la esquina inferior derecha -->
    <div class="recuadro">
        <img src="https://previews.123rf.com/images/qoolio/qoolio1603/qoolio160300028/53841816-logo-mascota-concepto-m%C3%ADnima-vector-para-la-tienda-de-mascotas-o-en-un-hotel.jpg" alt="Imagen de mascota">
    </div>

    <a href="{{ route('duenos.create') }}" class="create-button">Crear Dueños</a>

    <a href="{{ route('dashboard') }}" class="return-button">Regresar al inicio</a>

</body>

</html>
