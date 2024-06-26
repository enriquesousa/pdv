<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">

        {{-- CAJA DE BÚSQUEDA, ICONO FULL SCREEN, LIGAS DROPDOWN, BANDERAS DE IDIOMAS, CAMPANA DE NOTIFICACIONES, PERFIL --}}
        <ul class="list-unstyled topnav-menu float-end mb-0">

            {{-- CLICK DROPDOWN CAJA PARA CAJA DE BÚSQUEDA app-search-box dropdown --}}
            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle"
                                            src="{{ asset('backend/assets/images/users/user-2.jpg') }}"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle"
                                            src="{{ asset('backend/assets/images/users/user-5.jpg') }}"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </form>
            </li>

            {{-- CAJA DE BÚSQUEDA --}}
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                            aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            {{-- ICONO FULL SCREEN --}}
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                    href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>

            {{-- LIGAS DROPDOWN  --}}
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end">

                    <div class="p-lg-1">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/bitbucket.png') }}"
                                        alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/g-suite.png') }}" alt="G Suite">
                                    <span>G Suite</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </li>

            {{-- BANDERAS DE IDIOMAS --}}
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">

                {{-- Bandera por defecto --}}
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('backend/assets/images/flags/Mexico.png') }}" alt="user-image" height="16">
                </a>

                <div class="dropdown-menu dropdown-menu-end">

                    <!-- USA -->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('backend/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">USA</span>
                    </a>

                    <!-- germany -->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('backend/assets/images/flags/germany.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- italy -->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('backend/assets/images/flags/italy.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- spain -->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('backend/assets/images/flags/spain.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- russia -->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ asset('backend/assets/images/flags/russia.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </li>

            {{-- CAMPANA DE NOTIFICACIONES --}}
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div class="noti-scroll" data-simplebar>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}"
                                    class="img-fluid rounded-circle" alt="" />
                            </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="{{ asset('backend/assets/images/users/user-4.jpg') }}"
                                    class="img-fluid rounded-circle" alt="" />
                            </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);"
                        class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>

                </div>
            </li>


            {{-- PERFIL - Código para poder traer datos del usuario para desplegar foto de perfil y nombre de usuario --}}
            @php
                $id = Auth::user()->id;
                $adminData = App\Models\User::find($id);
            @endphp

            {{-- PERFIL dropdown notification-list topbar-dropdown --}}
            <li class="dropdown notification-list topbar-dropdown">

                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">

                    {{-- Foto de perfil --}}
                    <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg') }}" alt="user-image" class="rounded-circle">

                    {{-- Nombre de usuario --}}
                    <span class="pro-user-name ms-1">{{ $adminData->name }}<i class="mdi mdi-chevron-down"></i></span>

                </a>

                {{-- profile-dropdown --}}
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                    <!-- Bienvenido -->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Bienvenido !</h6>
                    </div>

                    <!-- Mi Perfil -->
                    <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Mi Perfil</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('change.password') }}" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Cambiar Contraseña</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Salir</span>
                    </a>

                </div>

            </li>


            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">

            <a href="{{ route('dashboard') }}" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    {{-- <span class="logo-lg-text-light">UBold</span> --}}
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('backend/assets/images/logo-pdv-esweb-dark.png') }}" alt="" height="30">
                    <span class="logo-lg-text-light">U</span>
                </span>
            </a>

            <a href="{{ route('dashboard') }}" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('backend/assets/images/logo-light2.png') }}" alt="" height="30">
                </span>
            </a>

        </div>

        {{-- MENU DEL TOPBAR topnav-menu topnav-menu-left --}}
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            {{-- Menu Corto --}}
            <li class="dropdown d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    Menu Corto
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-briefcase me-1"></i>
                        <span>New Projects</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-user me-1"></i>
                        <span>Create Users</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-bar-chart-line- me-1"></i>
                        <span>Revenue Report</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-headphones me-1"></i>
                        <span>Help & Support</span>
                    </a>

                </div>
            </li>

            {{-- Mega Menu --}}
            <li class="dropdown dropdown-mega d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    Mega Menu
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">

                        <div class="col-sm-8">
                                <div class="row">
                                  
                                {{-- Columna 1 --}}
                                <div class="col-md-2">

                                    {{-- NAVEGACIÓN --}}
                                    <h5 class="text-dark mt-0">NAVEGACIÓN</h5>
                                    <ul class="list-unstyled megamenu-list">

                                        {{-- PANEL --}}
                                        <li>
                                            <a href="{{ route('dashboard') }}">
                                                <i class="mdi mdi-view-dashboard-outline"></i>
                                                <span> Panel </span>
                                            </a>
                                        </li>

                                        {{-- PDV --}}
                                        <li>
                                            <a href="{{ route('pos') }}">
                                                <i class="mdi mdi-view-dashboard-outline"></i>
                                                <span> PDV </span>
                                            </a>
                                        </li>
                                       
                                    </ul>

                                    {{-- Avances de Salario --}}
                                    <h5 class="text-dark mt-0">Avances de Salario</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="{{ route('all.advance.salary') }}">Avances de Salario</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('add.advance.salary') }}">Agregar Salario</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary') }}">Pagar Ultimo Mes</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('month.salary') }}">Ver Ultimo Mes</a>
                                        </li>

                                    </ul>

                                </div>

                                {{-- Columna 2 --}}
                                <div class="col-md-2">

                                     {{-- Pagar Otro Mes Enero a Junio --}}
                                     <h5 class="text-dark mt-0">Pagar Otro Mes</h5>
                                     <ul class="list-unstyled megamenu-list">
                                         
                                         <li>
                                             <a href="{{ route('pay.salary.other.month', 'Enero') }}">Enero</a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pay.salary.other.month', 'Febrero') }}">Febrero</a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pay.salary.other.month', 'Marzo') }}">Marzo</a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pay.salary.other.month', 'Abril') }}">Abril</a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pay.salary.other.month', 'Mayo') }}">Mayo</a>
                                         </li>
                                         <li>
                                             <a href="{{ route('pay.salary.other.month', 'Junio') }}">Junio</a>
                                         </li>
                                         
                                     </ul>

                                </div>

                                {{-- Columna 3 --}}
                                <div class="col-md-2">

                                    {{-- Pagar Otro Mes Julio a Diciembre--}}
                                    <h5 class="text-dark mt-0">Pagar Otro Mes</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="{{ route('pay.salary.other.month', 'Julio') }}">Julio</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary.other.month', 'Agosto') }}">Agosto</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary.other.month', 'Septiembre') }}">Septiembre</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary.other.month', 'Octubre') }}">Octubre</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary.other.month', 'Noviembre') }}">Noviembre</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pay.salary.other.month', 'Diciembre') }}">Diciembre</a>
                                        </li>
                                    </ul>

                                </div>

                                {{-- Columna 4 --}}
                                <div class="col-md-2">

                                    {{-- Pagar Otro Mes Julio a Diciembre--}}
                                    <h5 class="text-dark mt-0">Columna 4</h5>
                                    

                                </div>

                                {{-- Columna 5 --}}
                                <div class="col-md-2">

                                    {{-- Pagar Otro Mes Julio a Diciembre--}}
                                    <h5 class="text-dark mt-0">Columna 5</h5>
                                   

                                </div>

                                {{-- Columna 6 --}}
                                <div class="col-md-2">

                                    {{-- Pagar Otro Mes Julio a Diciembre--}}
                                    <h5 class="text-dark mt-0">Columna 6</h5>

                                </div>

                            </div>
                        </div>

                        {{-- Special Discount Sale! --}}
                        <div class="col-sm-4">
                            <div class="text-center mt-3">
                                <h3 class="text-dark">Special Discount Sale!</h3>
                                <h4>Save up to 70% off.</h4>
                                <button class="btn btn-primary rounded-pill mt-3">Download Now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </li>

            {{-- LIGAS DROPDOWN  --}}
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end">

                    <div class="p-lg-1">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/bitbucket.png') }}"
                                        alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('backend/assets/images/brands/g-suite.png') }}" alt="G Suite">
                                    <span>G Suite</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </li>
            
        </ul>

        <div class="clearfix"></div>

    </div>
</div>
<!-- end Topbar -->
