<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Mascotas</title>
</head>
<body>
    <a href="{{route('mascotas.create')}}">Crear curso</a>
    <li>
        <ul>
            @foreach ($mascotas as $mascota)
                {{$mascota}}
            @endforeach
        </ul>
    </li>
</body>
</html>