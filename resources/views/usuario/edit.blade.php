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
                                <form action="{{route('usuarios.actualizar', $usuario -> id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <tr>
                                        <th class="table-info">Nombre:</th>
                                        <td><input type="text" class="form-control" name="nombre" value="{{$usuario->nombre}}"></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Número de identificacion:</th>
                                        <td><input type="enum" class="form-control" name="numero_identificacion" value="{{$usuario->numero_identificacion}}"></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Tipo de identificacion:</th>
                                        <td><select class="form-select" name="id_tipo_documento" id="id_tipo_documento" value="{{$usuario->id_tipo_documento}}">
                                            <option value="0" selected>Seleccione una opcion</option>
                                            <option value="1">C.C</option>
                                            <option value="2">C.E</option>
                                            <option value="3">N.I.P</option>
                                            <option value="4">N.I.T</option>
                                            <option value="5">P.A.P</option>
                                        </select></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Número de telefono:</th>
                                        <td><input type="enum" class="form-control" name="numero_identificacion" value="{{$usuario->numero_telefono}}"></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Cargo:</th>
                                        <td><select class="form-select" name="id_cargo" id="id_cargo">
                                            <option value="0" selected>Seleccione una opcion</option>
                                            <option value="1">Gerente</option>
                                            <option value="2">Administrador</option>
                                            <option value="3">Aux.Administrador</option>
                                            <option value="4">Almacenista</option>
                                            <option value="5">Conductor</option>
                                            <option value="5">Cliente</option>
                                        </select></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Correo electronico:</th>
                                        <td><input type="email" class="form-control" name="correo" value="{{$usuario->correo}}"></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Direccion de residencia:</th>
                                        <td><input type="address" class="form-control" name="direccion_residencia" value="{{$usuario->direccion_residencia}}"></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info">Genero:</th>
                                        <td><select class="form-select" name="genero" id="genero">
                                            <option value="0" selected>Seleccione una opcion</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenina</option>
                                            <option value="3">Prefiere no decirlo</option>
                                        </select></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th class="table-info" for="contraseña">Contraseña:</th>
                                        <td>
                                            <input type="password" id="contraseña" class="form-control" name="contraseña" value="{{$usuario->contraseña}}">
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <th colspan="2"><button class="btn btn-success">Guardar</button></th>
                                        <td colspan="2"><a class="btn btn-info" href="{{route('usuarios')}}">Volver</a></td>
                                    </tr>
                                </form>
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