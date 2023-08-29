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

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title migas de pan-->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="row">
                                        <table class="container table table-responsive table-dark table-striped">
                                                <thead class="nav-dark">
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Número de identificacion</th>
                                                        <th>tipo de identificacion</th>
                                                        <th>Número de telefono</th>
                                                        <th>Cargo</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                @foreach($usuarios as $usuario)
                                                <tbody>
                                                    <tr>
                                                        <td>{{$usuario->nombre}}</td>
                                                        <td>{{$usuario->numero_identificacion}}</td>
                                                        <td>{{$usuario->id_tipo_documento}}</td>
                                                        <td>{{$usuario->numero_telefono}}</td>
                                                        <td>{{$usuario->id_cargo}}</td>
                                                        <td>
                                                            <form action="{{route('usuarios.eliminar', $usuario -> id)}}" method="Post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="{{route('usuarios.detalles', $usuario -> id)}}" class="btn btn-info">Detalles</a>
                                                                <a href="{{route('usuarios.editar', $usuario -> id)}}" class="btn btn-warning">Editar</a>
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end migas de pan -->                          
                    <!-- end content-->                     
                    </div> <!-- container -->
                </div> <!-- content -->
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