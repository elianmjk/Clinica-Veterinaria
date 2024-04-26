<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado de la vista -->
</head>
<body>
    <h1>Listado de Visitas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Mascota</th>
                <th>Fecha de Visita</th>
                <th>Motivo</th>
                <th>Tratamiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visitas as $visita)
            <tr>
                <td>{{ $visita->id }}</td>
                <td>{{ $visita->mascota->nombre }}</td>
                <td>{{ $visita->fecha_visita }}</td>
                <td>{{ $visita->motivo }}</td>
                <td>{{ $visita->tratamiento }}</td>
                <td>
                    <a href="{{ route('visitas.edit', ['visita' => $visita->id]) }}">Editar</a>
                    <form action="{{ route('visitas.destroy', ['visita' => $visita->id]) }}" method="POST">
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
