<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cargos de los usuarios</title>
    <meta charset="utf-8" />
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
                        <a class="btn btn-outline-info" href="{{route('cargos.crear')}}">Crear nuevo  
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                            </svg>
                        </a>
                        <!-- start page title migas de pan-->
                        <div class="row">
                            <div class="col-5 offset-md-3">
                                <div class="page-title-box">
                                    <div class="row">
                                        <table class="container table table-responsive table-dark table-striped">
                                                <thead class="nav-dark">
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th class="text-center">Acciones</th>
                                                    </tr>
                                                </thead>
                                                @foreach($cargos as $cargo)
                                                <tbody>
                                                    <tr>
                                                        <td>{{$cargo->nombre}}</td>
                                                        <td>
                                                            <form class="text-center" action="{{route('cargos.eliminar', $cargo -> id)}}" method="Post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="{{route('cargos.editar', $cargo -> id)}}" class="btn btn-warning">Editar</a>
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