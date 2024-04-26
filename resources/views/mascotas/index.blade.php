<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Mascotas</title>
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
            max-width: 1000px;
            margin: 20px auto;
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

        .edit-button {
            background-color: #28a745; /* Verde */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #dc3545; /* Rojo */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-container {
            display: flex;
        }

        .button-container button {
            margin-right: 5px;
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

        /* Estilo del botón "Crear Mascota" */
        .crear-mascota-btn {
            position: fixed; /* Posición fija */
            bottom: 100px; /* Ajuste vertical */
            left: 20px; /* Ajuste horizontal */
            background-color: #004d99; /* Azul oscuro */
            color: white; /* Texto en blanco */
            padding: 10px 20px; /* Espaciado interno */
            text-decoration: none; /* Sin subrayado */
            border-radius: 5px; /* Borde redondeado */
            z-index: 1; /* Asegurar que esté por encima del botón "Regresar al inicio" */
        }

        .crear-mascota-btn:hover {
            background-color: #003366; /* Cambio de color al pasar el mouse */
        }
        
        /* Estilo del botón "Regresar al inicio" */
        .regresar-btn {
            position: fixed; /* Posición fija */
            bottom: 20px; /* Ajuste vertical */
            left: 20px; /* Ajuste horizontal */
            background-color: #007bff; /* Azul brillante */
            color: white; /* Texto en blanco */
            padding: 10px 20px; /* Espaciado interno */
            border-radius: 5px; /* Borde redondeado */
            text-decoration: none; /* Sin subrayado */
            z-index: 1; /* Asegurar que esté por encima del recuadro */
        }
        
        .regresar-btn:hover {
            background-color: #0056b3; /* Cambio de color al pasar el mouse */
        }
    </style>
</head>

<body>

    <h1 class="titulo">LISTADO DE MASCOTAS</h1> <!-- Título en el fondo azul -->
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Dueño_ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Especie</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->id }}</td>
                    <td>{{ $mascota->dueno_id }}</td>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td class="button-container">
                        <button class="edit-button"><a style="color: white; text-decoration: none;" href="{{ route('mascotas.edit', $mascota->id) }}">Editar</a></button>
                        <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" style="display: inline;">
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
    <a href="{{ route('dashboard') }}" class="regresar-btn">Regresar al inicio</a>
    <a href="{{ route('mascotas.create') }}" class="crear-mascota-btn">Crear Mascota</a>
</body>

</html>

