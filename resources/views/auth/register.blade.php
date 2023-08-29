
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

<head>
    <meta charset="utf-8" />
    <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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

<body class="authentication-bg pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="index.html" class="logo-dark">
                        <span><img src="assets/images/logo-dark.png" alt="dark logo" height="22"></span>
                    </a>
                    <a href="index.html" class="logo-light">
                        <span><img src="assets/images/logo.png" alt="logo" height="22"></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-3">Inicio de sesion</h4>
                    <p class="text-muted mb-4">No tienes una cuenta? Crea tu propia cuenta, solo te tomara un minuto</p>

                    <!-- form -->
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nombre completo</label>
                            <input class="form-control" type="text" id="fullname" name="name" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Correo electronico</label>
                            <input class="form-control" type="email" id="emailaddress" required  name="email" placeholder="Ingrese su correo">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i>Iniciar sesion </button>
                        </div>
                        <!-- social-->
                        <div class="text-center mt-4">
                            <p class="text-muted font-16">Inicia sesion usando: </p>
                            <ul class="social-list list-inline mt-3">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Ya tienes una cuenta? <a href="pages-login-2.html" class="text-muted ms-1"><b>Iniciar sesion</b></a></p>
                </footer>

            </div> 
        </div>
    </div>
    <!-- end auth-fluid-->
     <!-- Vendor js -->
     <script src="{{url('js/vendor.min.js')}}"></script>
        
     <!-- App js -->
     <script src="{{url('js/app.min.js')}}"></script>
</body>

</html>