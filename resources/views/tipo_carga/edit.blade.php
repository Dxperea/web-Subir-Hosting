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
<div class="content-page">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar tipo de carga</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('tipo_cargas') }}" enctype="multipart/form-data">
                        Regresar</a>

                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}

        </div>
        @endif
        <form action="{{ route('tipo_cargas.actualizar',$tipo_carga->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre :</strong>
                        <input type="text" name="Nombre" value="{{ $tipo_cargas->nombre }}" class="form-control" placeholder="Nombre" required>

                        @error('Nombre')

                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>peso :</strong>
                            <input type="int" name="peso" value="{{$tipo_cargas->peso }}" class="form-control" placeholder="Peso" required>

                            @error('valor_Peso')

                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tipo de carga:</strong>
                                <input type="text" name="tipo" value="{{ $tipo_cargas->tipo}}" class="form-control" placeholder="tipo" required>

                                @error('evidencia')

                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                                @enderror
                            </div>
                        </div> <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>valor flete:</strong>
                                <input type="number" name="valor_flete" value="{{ $tipo_cargas->valor_flete}}" class="form-control" placeholder="valor flete" required>

                                @error('valor_flete')

                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>valor seguro:</strong>
                                <input type="number" name="valor_seguro" value="{{$tipo_cargas->valor_seguro}}" class="form-control" placeholder="valor seguro" require >

                                @error('valor_seguro')

                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>

                                @enderror
                            </div>
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