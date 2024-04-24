<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Mascotas</title>
</head>
<body>
    <a href="{{route('mascotas.create')}}">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Dueño_ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Raza</th>
                <th scope="col">Edad</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
            <tr>
                <th scope="row">{{ $mascota->id }}</th>
                <td>{{$mascota->dueno_id }}</td>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->especie }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->edad }}</td>
                <td>
                    <a href="{{ route('mascotas.edit', $mascota->id) }}">Editar</a>
                    <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
