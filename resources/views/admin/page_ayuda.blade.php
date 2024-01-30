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



                        <div class="card">

                            <div class="text-center w-80 m-auto p-2">
                                <div class="auth-logo">

                                    <a href="{{ url('/') }}" class="text-center">
                                        <span class="logo-lg">
                                            <img class="card-img-top img-fluid" src="{{ asset('backend/assets/images/pdvPhoto.png') }}" alt="Card image cap">
                                        </span>
                                    </a>
                
                                </div>
                            </div>

                            {{-- <img class="card-img-top img-fluid" src="{{ asset('backend/assets/images/pdvPhoto.png') }}" alt="Card image cap"> --}}



                            <div class="card-body">
                                <h5 class="card-title">PDV EsWeb</h5>
                                <p class="card-text">El sistema de gestión de Punto de Venta EsWeb, es una herramienta de administración, que nos permite llevar el control de las ventas de productos asi como el inventario.</p>
                                <p class="card-text">
                                Ademas de gestionar las facturas, Empleados, Clientes, Productos y Proveedores...</p>
                                <p class="card-text">
                                    Todo en una aplicación Web que podrá ser utilizada con facilidad desde cualquier dispositivo conectado a Internet.</p>
                                <a href="{{ route('home') }}" class="btn btn-primary waves-effect waves-light">Regresar</a>
                            </div>
                        </div>



                        {{-- <div class="card bg-pattern">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-dark2.png')}}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}



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