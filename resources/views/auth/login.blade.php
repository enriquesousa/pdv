<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Inicio | PV Fácil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico')}}">

		<!-- Bootstrap css -->
		<link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{ asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{ asset('backend/assets/js/head.js')}}"></script>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">

                                        <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-dark2.png')}}" alt="" height="22">
                                            </span>
                                        </a>

                                    </div>
                                    <p class="text-muted mb-4 mt-3">Ingrese su dirección de correo electrónico y contraseña para acceder al panel de administración.</p>
                                </div>


                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    {{-- Email/Name/Phone --}}
                                    <div class="mb-3">

                                        <label for="login" class="form-label">Correo electrónico/Nombre/Teléfono</label>

                                        <input class="form-control @error('login') is-invalid @enderror" value="{{ old('login') }}" name="login" type="text" id="login" required="" placeholder="Introduce tu correo electrónico" autofocus>
                                        @error('login')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    {{-- Password --}}
                                    <div class="mb-3">

                                        <label for="password" class="form-label">Contraseña</label>

                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ingresa tu contraseña">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                            @error('login')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Remember me --}}
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Acuérdate de mí</label>
                                        </div>
                                    </div>

                                    {{-- submit --}}
                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit"> Acceso </button>
                                    </div>

                                </form>

                                {{-- Inicia sesión con --}}
                                {{-- <div class="text-center">
                                    <h5 class="mt-3 text-muted">Inicia sesión con</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> --}}

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        {{-- ¿Olvidaste tu contraseña?, Inscribirse --}}
                        <div class="row mt-3">
                            <div class="col-12 text-center">

                                {{-- <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">¿Olvidaste tu contraseña?</a></p>
                                <p class="text-white-50">¿No tienes una cuenta? <a href="auth-register.html" class="text-white ms-1"><b>Inscribirse</b></a></p> --}}

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2023 - <script>document.write(new Date().getFullYear())</script> &copy; Punto de Venta Fácil por <a href="" class="text-white-50">Esweb</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js')}}"></script>
        
    </body>
</html>