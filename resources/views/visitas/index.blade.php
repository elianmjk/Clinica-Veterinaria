<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Visitas</title>
    <style>
        body {
            background-color: #87CEEB;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .titulo {
            background-color: #87CEEB;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .table-container {
            max-width: 1000px;
            margin: 20px auto;
            overflow-x: auto;
        }

        .table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border-right: 1px solid #ddd;
        }

        .table th:last-child,
        .table td:last-child {
            border-right: none;
        }

        .table th {
            background-color: #87CEEB;
            color: white;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
        }

        .edit-button,
        .delete-button {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .delete-button {
            background-color: #dc3545;
            margin-left: 5px;
        }

        .create-button {
            position: fixed;
            bottom: 100px;
            left: 20px;
            background-color: #1E90FF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .create-button:hover {
            background-color: #0066CC;
        }

        .return-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .return-button:hover {
            background-color: #0056b3;
        }

        .recuadro {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 100px;
            height: 100px;
            background-color: white;
            border-radius: 10px;
            border: 2px solid #ccc;
            overflow: hidden;
        }

        .recuadro img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <h1 class="titulo">Listado de Visitas</h1>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mascota </th>
                    <th scope="col">Fecha de Visita</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Tratamiento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visitas as $visita)
                <tr>
                    <td>{{ $visita->id }}</td>
                    <td>{{ $visita->mascota_id }}</td>
                    <td>{{ $visita->fecha_visita }}</td>
                    <td>{{ $visita->motivo }}</td>
                    <td>{{ $visita->tratamiento }}</td>
                    <td class="button-container">
                        <button class="edit-button"><a style="color: white;" href="{{ route('visitas.edit', $visita->id) }}">Editar</a></button>
                        <form action="{{ route('visitas.destroy', $visita->id) }}" method="POST" style="display: inline;">
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

    <div class="recuadro">
        <img src="https://previews.123rf.com/images/qoolio/qoolio1603/qoolio160300028/53841816-logo-mascota-concepto-m%C3%ADnima-vector-para-la-tienda-de-mascotas-o-en-un-hotel.jpg" alt="Imagen de mascota">
    </div>

    <a href="{{ route('visitas.create') }}" class="create-button">Crear Visita</a>

    <a href="{{ route('dashboard') }}" class="return-button">Regresar al inicio</a>

</body>

</html>
