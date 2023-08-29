<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Viaticos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Theme Config Js -->
  <script src="{{ url('js/hyper-config.js')}}"></script>

<!-- App css -->
<link href="{{ url('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="{{ url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="content-page">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Viaticos</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('viatico_conductores') }}" enctype="multipart/form-data">
                        Regresar</a>

                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}

        </div>
        @endif
        <form action="{{ route('viatico_conductores.actualizar',$viaticos_conductor->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre :</strong>
                        <input type="text" name="nombre" value="{{ viaticos_conductor->nombre }}" class="form-control" placeholder="Nombre ">

                        @error('nombre')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>costo:</strong>
                            <input type="int" name="costo" value="{{ viaticos_conductor->costo }}" class="form-control" placeholder="costo">

                            @error('costo')

                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>fecha:</strong>
                                <input type="date" name="marca" value="{{ $viaticos_conductor->fecha}}" class="form-control" placeholder="fecha ">

                                @error('fecha')

                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>evidencia:</strong>
                                    <input type="text" name="Modelo" value="{{ $viaticos_conductor->evidencia}}" class="form-control" placeholder="Evidencia">

                                    @error('evidencia')

                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tipo :</strong>
                                        <input type="text" name="color" value="{{$viaticos_conductor->tipo}}" class="form-control" placeholder="Tipo">

                                        @error('Tipo')

                                        <div class="alert alert-danger mt-
                                        1 mb-1">{{ $message }}</div>

                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary ml-3">Editar</button>
                            </div>
        </form>
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
</body>

</html>