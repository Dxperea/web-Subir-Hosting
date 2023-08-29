<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro del viaje</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach
                    <tr>
                        <td>{{$registro_viaje->id}}</td>
                        <td>{{$registro_viaje->direccion}}</td>
                        <td>
                            <form action="{{route('registro_viajes.eliminar', $registro_viaje->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a class="btn btn-info btn-sm" href="{{route('registro_viaje.detalles', $registro_viaje->id)}}">Detalles</a>
                                <a class="btn btn-success btn-sm" href="{{route('registro_viaje.editar', $registro_viaje->id)}}">Editar</a>
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td> 
                    </tr>   
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>