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
            <th scope="col">#</th>
            <th scope="col">nombre</th>
            <th scope="col">especie</th>
            <th scope="col">raza</th>
            <th scope="col">edad</th>
            <th scope="col">Acciones</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
            <tr>
                <th scope="row">{{$mascota->id}}</th>
                <td>{{$mascota->dueno->nombre}}</td>
                <td>{{ $mascota->nombre}}</td>
                <td>{{$mascota->especie}}</td>
                <td>{{$mascota->raza}}</td>
                <td>{{$mascota->edad }}</td>
              </tr>
            @endforeach
         
        </tbody>
        
      </table>
</body>
</html>