<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Visita</title>
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
            font-size: 4em;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
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
    </style>
</head>

<body>

    <h1 class="titulo">Crear Visita</h1>

    <form action="{{ route('visitas.store') }}" method="POST">
        @csrf 
        <label for="mascota_id">Mascota</label>
        <select name="mascota_id" id="mascota_id">
            @foreach($mascotas as $mascota)
                <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
            @endforeach
        </select>

        <label for="fecha_visita">Fecha de Visita</label>
        <input type="date" id="fecha_visita" name="fecha_visita" required>

        <label for="motivo">Motivo</label>
        <input type="text" id="motivo" name="motivo" required>

        <label for="tratamiento">Tratamiento</label>
        <input type="text" id="tratamiento" name="tratamiento" required>

        <button type="submit">Guardar</button>
    </form>

    <div class="recuadro">
        <img src="https://previews.123rf.com/images/qoolio/qoolio1603/qoolio160300028/53841816-logo-mascota-concepto-m%C3%ADnima-vector-para-la-tienda-de-mascotas-o-en-un-hotel.jpg" alt="Mascotas">
    </div>

    <a href="{{ route('dashboard') }}" class="return-button">Regresar al inicio</a>

</body>

</html>
