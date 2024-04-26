<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Visita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #87CEEB; /* Azul cielo */
            font-family: Arial, sans-serif;
            margin: 0; /* Eliminar margen */
            padding: 0; /* Eliminar relleno */
        }

        .container {
            max-width: 600px; /* Ancho máximo del contenedor */
            margin: 20px auto; /* Margen superior e inferior automático, centrado horizontalmente */
            background-color: #fff; /* Fondo blanco */
            padding: 20px; /* Espaciado interno */
            border-radius: 10px; /* Borde redondeado */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
        }

        .titulo {
            color: #fff; /* Color del texto blanco */
            text-align: center; /* Alinear al centro */
            font-size: 2em; /* Tamaño de fuente grande */
            margin-bottom: 20px; /* Espaciado inferior */
        }

        .form-label {
            font-weight: bold; /* Texto en negrita */
        }

        .form-control {
            margin-bottom: 20px; /* Espaciado inferior */
        }

        .button-container {
            display: flex; /* Mostrar los botones en línea */
            justify-content: space-between; /* Espacio entre los botones */
        }

        .button-container button {
            width: 48%; /* Ancho de los botones */
            border-radius: 5px; /* Borde redondeado */
            cursor: pointer;
        }

        .btn-guardar {
            background-color: #28a745; /* Verde */
            color: white; /* Color del texto */
            border: none; /* Sin borde */
            max-width: 150px; /* Ancho máximo del botón */
        }

        .btn-cancelar {
            background-color: #fd7e14; /* Naranja */
            color: white; /* Color del texto */
            border: none; /* Sin borde */
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
    <h1 class="titulo">Editar Visita</h1>
    <div class="container">
        <form method="POST" action="{{ route('visitas.update', $visita->id) }}">
            @csrf
            @method('PUT')
            <label for="mascota_id" class="form-label">Mascota</label>
            <select name="mascota_id" id="mascota_id" class="form-control">
                @foreach($mascotas as $mascota)
                    <option value="{{ $mascota->id }}" {{ $visita->mascota_id == $mascota->id ? 'selected' : '' }}>{{ $mascota->nombre }}</option>
                @endforeach
            </select>
            <label for="fecha_visita" class="form-label">Fecha de Visita</label>
            <input type="date" id="fecha_visita" name="fecha_visita" class="form-control" value="{{ $visita->fecha_visita }}">
            <label for="motivo" class="form-label">Motivo</label>
            <input type="text" id="motivo" name="motivo" class="form-control" placeholder="Editar motivo" value="{{ $visita->motivo }}">
            <label for="tratamiento" class="form-label">Tratamiento</label>
            <input type="text" id="tratamiento" name="tratamiento" class="form-control" placeholder="Editar tratamiento" value="{{ $visita->tratamiento }}">
            <div class="button-container">
                <button type="submit" class="btn btn-guardar">Guardar Cambios</button>
                <a href="{{ route('dashboard') }}" class="btn btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Recuadro en la esquina inferior derecha -->
    <div class="recuadro">
        <img src="https://previews.123rf.com/images/qoolio/qoolio1603/qoolio160300028/53841816-logo-mascota-concepto-m%C3%ADnima-vector-para-la-tienda-de-mascotas-o-en-un-hotel.jpg" alt="Mascota">
    </div>
    <a href="{{ route('dashboard') }}" style="position: fixed; bottom: 20px; left: 20px; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Regresar al inicio</a>
</body>

</html>
