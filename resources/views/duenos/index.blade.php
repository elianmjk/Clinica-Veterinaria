<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Mascotas</title>
</head>
<body>
    <a href="{{route('duenos.create')}}">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($duenos as $dueno)
            <tr>
                <th scope="row">{{$dueno->id}}</th>
                <td>{{$dueno->nombre}}</td>
                <td>{{$dueno->apellido}}</td>
                <td>{{$dueno->direccion}}</td>
                <td>{{$dueno->telefono}}</td>
                <td>{{$dueno->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>