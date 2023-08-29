<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Guest</title>
    <meta charset="utf-8" />
        <title>Transportation solution system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />


        <!-- Theme Config Js -->
        <script src="{{ url('js/hyper-config.js')}}"></script>

        <!-- App css -->
        <link href="{{ url('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>
    <!-- ========== Topbar Start ========== -->
@include('layouts.componets.navbar')
            <!-- ========== Topbar End ========== -->
            <!-- ========== Left Sidebar Start ========== -->
@include('layouts.componets.sidebar')
            <!-- ========== Left Sidebar End ========== -->
            <br>
            <div class="content-page">
                <div class="content">   
                    <div class="Container-fluid">
                        <div class="row">
                            <div class="col-5 offset-md-3">
                                <table class="container table table-responsive">
                                <thead class="nav-dark card-head">
                                    <tr>
                                        <th class="table-info">Nombre:</th>
                                        <td>{{$usuario->nombre}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Número de identificacion:</th>
                                        <td>{{$usuario->numero_identificacion}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">tipo de identificacion:</th>
                                        <td>{{$usuario->id_tipo_documento}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Número de telefono:</th>
                                        <td>{{$usuario->numero_telefono}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Cargo:</th>
                                        <td>{{$usuario->id_cargo}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Correo electronico:</th>
                                        <td>{{$usuario->correo}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Direccion de residencia:</th>
                                        <td>{{$usuario->direccion_residencia}}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-info">Genero:</th>
                                        <td>{{$usuario->genero}}</td>
                                    </tr>
                                </thead>
                                <td>
                                    <form action="{{route('usuarios.eliminar', $usuario -> id)}}" method="Post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('usuarios.editar', $usuario -> id)}}" class="btn btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vendor js -->
<script src="{{url('js/vendor.min.js')}}"></script>

<!-- Code Highlight js -->
<script src="{{('js/highlight.pack.min.js')}}"></script>
<script src="{{url('js/clipboard.min.js')}}"></script>
<script src="{{url('js/hyper-syntax.js')}}"></script>

<!-- App js -->
<script src="{{url('js/app.min.js')}}"></script>
</html>