<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vehiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Theme Config Js -->
  <script src="{{ url('js/hyper-config.js')}}"></script>

<!-- App css -->
<link href="{{ url('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="{{ url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>


<body>
    <!-- ========== Topbar Start ========== -->
@include('layouts.componets.navbar')
            <!-- ========== Topbar End ========== -->
            <!-- ========== Left Sidebar Start ========== -->
@include('layouts.componets.sidebar')
            <!-- ========== Left Sidebar End ========== -->
            <br>
            <div class="content-page">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Registre Autorizaciones</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('Autorizaciones') }}"> Regresar</a>

                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('Autorizaciones.guardar') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>fecha:</strong>
                        <input type="date" name="fecha" class="form-control" placeholder="fecha " required >
                        @error('fecha')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>valor compra:</strong>
                        <input type="enum"  name="valor_compra" class="form-control" placeholder="valor compra" required>
                        @error('valor_compra')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>evidencia:</strong>

                        <input type="text" name="evidencia" class="form-control" placeholder="evidencia" required>

                        @error('evidencia')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id_orden_compra:</strong>
                        <input type="number"  name="id_orden_compra" class="form-control" placeholder="id_orden_compra">
                        @error('valor_compra')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>id_usuario:</strong>
                        <input type="number"  name="id_usuario" class="form-control" placeholder="id_usuario">
                        @error('id_usuario')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                
                </div>

                <button type="submit" class="btn btn-primary ml-3">Crear</button>
            </div>
        </form>
        </div>
          <!-- Vendor js -->
<script src="{{url('js/vendor.min.js')}}"></script>

<!-- Code Highlight js -->
<script src="{{('js/highlight.pack.min.js')}}"></script>
<script src="{{url('js/clipboard.min.js')}}"></script>
<script src="{{url('js/hyper-syntax.js')}}"></script>

<!-- App js -->
<script src="{{url('js/app.min.js')}}"></script>
</body>

</html>