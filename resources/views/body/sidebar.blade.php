<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        {{-- PERFIL - Código para poder traer datos del usuario para desplegar foto de perfil y nombre de usuario --}}
        @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
        @endphp

        <!-- User box -->
        <div class="user-box text-center">

            {{-- <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md"> --}}

            {{-- Foto de perfil --}}
            <img src="{{ !empty($adminData->photo) ? url('upload/admin_image/' . $adminData->photo) : url('upload/no_image.jpg') }}"
                alt="user-image" class="rounded-circle">

            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">{{ $adminData->name }}</a>

                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
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
            </div>

            <p class="text-muted">Admin</p>


        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                {{-- * PANELES --}}
                <li class="menu-title"><span class="badge bg-primary">PANELES</span></li>

                {{-- PANEL INICIAL --}}
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Panel Inicial </span>
                    </a>
                </li>

                {{-- PANEL DE CONTROL --}}
                @if (Auth::user()->can('panel.control'))
                    <li>
                        <a href="{{ route('dashboard_control') }}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Panel Control </span>
                        </a>
                    </li>
                @endif

                {{-- PDV --}}
                @if (Auth::user()->can('panel.pdv'))
                    <li>
                        <a href="{{ route('pos') }}">
                            <span class="badge bg-pink float-end">{{ Cart::count() }}</span>
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> PDV </span>
                        </a>
                    </li>
                @endif



                {{-- * ADMINISTRACIÓN --}}
                <li class="menu-title mt-2"><span class="badge bg-primary">ADMINISTRACIÓN</span></li>

                {{-- Avances de Salario --}}
                @if (Auth::user()->can('salario.menu'))
                    <li>
                        <a href="#sidebarSalario" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-cash-outline"></i>
                            <span>Salarios</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSalario">

                            <ul class="nav-second-level">

                                @if (Auth::user()->can('salario.avance'))
                                    <li>
                                        <a href="{{ route('all.advance.salary') }}">Avances de Salario</a>
                                    </li>
                                @endif

                                @if (Auth::user()->can('salario.agregar'))
                                    <li>
                                        <a href="{{ route('add.advance.salary') }}">Agregar Salario</a>
                                    </li>
                                @endif

                                @if (Auth::user()->can('salario.pagar.mes'))
                                    <li>
                                        <a href="{{ route('pay.salary') }}">Pagar Ultimo Mes</a>
                                    </li>
                                @endif

                                @if (Auth::user()->can('salario.ver.mes'))
                                    <li>
                                        <a href="{{ route('month.salary') }}">Ver Ultimo Mes</a>
                                    </li>
                                @endif

                                {{-- Menus Multilevel --}}
                                @if (Auth::user()->can('salario.pagar.otro.mes'))
                                    <li>
                                        <a href="#sidebarMultiNivel2" data-bs-toggle="collapse">
                                            Pagar Otro Mes <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarMultiNivel2">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="{{ route('pay.salary.other.month', 'Enero') }}">Enero</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('pay.salary.other.month', 'Febrero') }}">Febrero</a>
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
                                                <li>
                                                    <a href="{{ route('pay.salary.other.month', 'Julio') }}">Julio</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('pay.salary.other.month', 'Agosto') }}">Agosto</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('pay.salary.other.month', 'Septiembre') }}">Septiembre</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('pay.salary.other.month', 'Octubre') }}">Octubre</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('pay.salary.other.month', 'Noviembre') }}">Noviembre</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ route('pay.salary.other.month', 'Diciembre') }}">Diciembre</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endif

                            </ul>


                        </div>
                    </li>
                @endif

                {{-- Asistencias --}}
                @if (Auth::user()->can('asistencias.menu'))
                    <li>
                        <a href="#attendance" data-bs-toggle="collapse">
                            <i class="mdi mdi-book-clock-outline"></i>
                            <span>Asistencias</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="attendance">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('asistencias.all'))
                                    <li>
                                        <a href="{{ route('employee.attendances.list') }}">Lista de Asistencias</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('asistencias.add'))
                                    <li>
                                        <a href="{{ route('add.employee.attendance') }}">Agregar Asistencias</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Categorías --}}
                @if (Auth::user()->can('categorias.menu'))
                    <li>
                        <a href="#category" data-bs-toggle="collapse">
                            <i class="mdi mdi-table-cog"></i>
                            <span>Categorías</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('categorias.all'))
                                    <li>
                                        <a href="{{ route('list.category') }}">Lista Categorías</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Productos --}}
                @if (Auth::user()->can('productos.menu'))
                    <li>
                        <a href="#product" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span>Productos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="product">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('productos.all'))
                                    <li>
                                        <a href="{{ route('list.product') }}">Lista Productos</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('productos.add'))
                                    <li>
                                        <a href="{{ route('add.product') }}">Agregar Producto</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('productos.importar'))
                                    <li>
                                        <a href="{{ route('import.product') }}">Importar de Excel</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Ordenes / Ventas --}}
                @if (Auth::user()->can('ventas.menu'))
                    <li>
                        <a href="#ordenes" data-bs-toggle="collapse">
                            <i class="mdi mdi-clipboard-multiple-outline"></i>
                            <span>Ventas</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="ordenes">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('ventas.pendientes'))
                                    <li>
                                        <a href="{{ route('pending.order') }}">Pendientes</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('ventas.completadas'))
                                    <li>
                                        <a href="{{ route('complete.order') }}">Completadas</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('ventas.pendientes'))
                                    <li>
                                        <a href="{{ route('pending.due') }}">Saldos Pendientes</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Almacén --}}
                @if (Auth::user()->can('almacen.menu'))
                    <li>
                        <a href="#stock" data-bs-toggle="collapse">
                            <i class="mdi mdi-text-box-multiple-outline"></i>
                            <span>Almacén</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="stock">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('almacen.all'))
                                    <li>
                                        <a href="{{ route('stock.manage') }}">Control de Almacén</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif



                {{-- Admin Configuración de Usuarios --}}
                @if (Auth::user()->can('usuarios.menu'))
                    <li>
                        <a href="#admin" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-settings-outline"></i>
                            <span>Usuarios</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="admin">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.admin') }}">Lista</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.admin') }}">Agregar</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Respaldo Database --}}
                @if (Auth::user()->can('respaldo.menu'))
                    <li>
                        <a href="#respaldo_menu" data-bs-toggle="collapse">
                            <i class="mdi mdi-backup-restore"></i>
                            <span>Respaldos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="respaldo_menu">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('database.backup') }}">Base de Datos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif




                {{-- * MANEJO DE DINERO --}}
                @if (Auth::user()->can('gastos.menu'))

                    <li class="menu-title mt-2"><span class="badge bg-primary">MANEJO DE DINERO</span></li>

                    {{-- Gastos --}}
                    <li>
                        <a href="#sidebarReportes" data-bs-toggle="collapse">
                            <i class="mdi mdi-briefcase-check-outline"></i>
                            <span>Gastos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarReportes">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('gastos.add'))
                                    <li>
                                        <a href="{{ route('add.expense') }}">Agregar Gasto</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('gastos.hoy'))
                                    <li>
                                        <a href="{{ route('today.expense') }}">Gatos de Hoy</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('gastos.mes'))
                                    <li>
                                        <a href="{{ route('month.expense') }}">Gatos por Mes</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('gastos.año'))
                                    <li>
                                        <a href="{{ route('year.expense') }}">Gastos por Año</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>

                @endif

                {{-- * Data: Empleados, Clientes, Proveedores, Datos --}}
                <li class="menu-title mt-2"><span class="badge bg-primary">DATA</span></li>

                {{-- Control de Empleados --}}
                @if (Auth::user()->can('empleado.menu'))
                    <li>
                        <a href="#sidebarEmpleados" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span>Empleados</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmpleados">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('empleado.all'))
                                    <li>
                                        <a href="{{ route('all.employee') }}">Lista Empleados</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('empleado.add'))
                                    <li>
                                        <a href="{{ route('employee.add') }}">Agregar Empleado</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Control de Clientes --}}
                @if (Auth::user()->can('cliente.menu'))
                    <li>
                        <a href="#sidebarClientes" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span>Clientes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarClientes">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('cliente.all'))
                                    <li>
                                        <a href="{{ route('all.customer') }}">Lista Clientes</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('cliente.add'))
                                    <li>
                                        <a href="{{ route('customer.add') }}">Agregar Cliente</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Control de Proveedores --}}
                @if (Auth::user()->can('proveedor.menu'))
                    <li>
                        <a href="#sidebarProveedores" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span>Proveedores</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProveedores">
                            <ul class="nav-second-level">
                                @if (Auth::user()->can('proveedor.all'))
                                    <li>
                                        <a href="{{ route('all.supplier') }}">Lista de Proveedores</a>
                                    </li>
                                @endif
                                @if (Auth::user()->can('proveedor.add'))
                                    <li>
                                        <a href="{{ route('supplier.add') }}">Agregar Proveedor</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- Configuración de Datos --}}
                @if (Auth::user()->can('datos.menu'))
                    <li>
                        <a href="#sidebarConfigData" data-bs-toggle="collapse">
                            <i class="mdi mdi-poll"></i>
                            <span>Datos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarConfigData">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.anios') }}">Años</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif




                {{-- * Roles y Permisos --}}
                <li class="menu-title mt-2"><span class="badge bg-primary">ROLES Y PERMISOS</span></li>

                {{-- Roles y Permisos --}}
                @if (Auth::user()->can('permisos.menu'))
                    <li>
                        <a href="#roles" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-cog-outline"></i>
                            <span>Permisos</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="roles">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.roles.permission') }}">Lista Roles y Permisos</a>
                                </li>
                                <li>
                                    <a href="{{ route('all.roles') }}">Lista de Roles</a>
                                </li>
                                <li>
                                    <a href="{{ route('all.permission') }}">Lista de Permisos</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.roles.permission') }}">Asignar Roles</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @endif






                {{-- Chat --}}
                {{-- <li>
                    <a href="apps-chat.html">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Chat </span>
                    </a>
                </li> --}}

                {{-- Ecommerce --}}
                {{-- <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Ecommerce </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="ecommerce-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="ecommerce-products.html">Products</a>
                            </li>
                            <li>
                                <a href="ecommerce-product-detail.html">Product Detail</a>
                            </li>
                            <li>
                                <a href="ecommerce-product-edit.html">Add Product</a>
                            </li>
                            <li>
                                <a href="ecommerce-customers.html">Customers</a>
                            </li>
                            <li>
                                <a href="ecommerce-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="ecommerce-order-detail.html">Order Detail</a>
                            </li>
                            <li>
                                <a href="ecommerce-sellers.html">Sellers</a>
                            </li>
                            <li>
                                <a href="ecommerce-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="ecommerce-checkout.html">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- CRM --}}
                {{-- <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> CRM </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="crm-dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="crm-contacts.html">Contacts</a>
                            </li>
                            <li>
                                <a href="crm-opportunities.html">Opportunities</a>
                            </li>
                            <li>
                                <a href="crm-leads.html">Leads</a>
                            </li>
                            <li>
                                <a href="crm-customers.html">Customers</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Email --}}
                {{-- <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="email-read.html">Read Email</a>
                            </li>
                            <li>
                                <a href="email-compose.html">Compose Email</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Email Templates</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Social Feed --}}
                {{-- <li>
                    <a href="apps-social-feed.html">
                        <span class="badge bg-pink float-end">Hot</span>
                        <i class="mdi mdi-rss"></i>
                        <span> Social Feed </span>
                    </a>
                </li> --}}

                {{-- Companies --}}
                {{-- <li>
                    <a href="apps-companies.html">
                        <i class="mdi mdi-domain"></i>
                        <span> Companies </span>
                    </a>
                </li> --}}

                {{-- Projects --}}
                {{-- <li>
                    <a href="#sidebarProjects" data-bs-toggle="collapse">
                        <i class="mdi mdi-briefcase-check-outline"></i>
                        <span> Projects </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="nav-second-level">
                            <li>
                                <a href="project-list.html">List</a>
                            </li>
                            <li>
                                <a href="project-detail.html">Detail</a>
                            </li>
                            <li>
                                <a href="project-create.html">Create Project</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Tasks --}}
                {{-- <li>
                    <a href="#sidebarTasks" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-multiple-outline"></i>
                        <span> Tasks </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="task-list.html">List</a>
                            </li>
                            <li>
                                <a href="task-details.html">Details</a>
                            </li>
                            <li>
                                <a href="task-kanban-board.html">Kanban Board</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Contacts --}}
                {{-- <li>
                    <a href="#sidebarContacts" data-bs-toggle="collapse">
                        <i class="mdi mdi-book-account-outline"></i>
                        <span> Contacts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarContacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="contacts-list.html">Members List</a>
                            </li>
                            <li>
                                <a href="contacts-profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Tickets --}}
                {{-- <li>
                    <a href="#sidebarTickets" data-bs-toggle="collapse">
                        <i class="mdi mdi-lifebuoy"></i>
                        <span> Tickets </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTickets">
                        <ul class="nav-second-level">
                            <li>
                                <a href="tickets-list.html">List</a>
                            </li>
                            <li>
                                <a href="tickets-detail.html">Detail</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- File Manager --}}
                {{-- <li>
                    <a href="apps-file-manager.html">
                        <i class="mdi mdi-folder-star-outline"></i>
                        <span> File Manager </span>
                    </a>
                </li> --}}

                {{-- * Custom --}}
                {{-- <li class="menu-title mt-2">Custom</li> --}}

                {{-- Auth Pages --}}
                {{-- <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Auth Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="auth-login.html">Log In</a>
                            </li>
                            <li>
                                <a href="auth-login-2.html">Log In 2</a>
                            </li>
                            <li>
                                <a href="auth-register.html">Register</a>
                            </li>
                            <li>
                                <a href="auth-register-2.html">Register 2</a>
                            </li>
                            <li>
                                <a href="auth-signin-signup.html">Signin - Signup</a>
                            </li>
                            <li>
                                <a href="auth-signin-signup-2.html">Signin - Signup 2</a>
                            </li>
                            <li>
                                <a href="auth-recoverpw.html">Recover Password</a>
                            </li>
                            <li>
                                <a href="auth-recoverpw-2.html">Recover Password 2</a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html">Lock Screen</a>
                            </li>
                            <li>
                                <a href="auth-lock-screen-2.html">Lock Screen 2</a>
                            </li>
                            <li>
                                <a href="auth-logout.html">Logout</a>
                            </li>
                            <li>
                                <a href="auth-logout-2.html">Logout 2</a>
                            </li>
                            <li>
                                <a href="auth-confirm-mail.html">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="auth-confirm-mail-2.html">Confirm Mail 2</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Extra Pages --}}
                {{-- <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages-sitemap.html">Sitemap</a>
                            </li>
                            <li>
                                <a href="pages-invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages-faqs.html">FAQs</a>
                            </li>
                            <li>
                                <a href="pages-search-results.html">Search Results</a>
                            </li>
                            <li>
                                <a href="pages-pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages-maintenance.html">Maintenance</a>
                            </li>
                            <li>
                                <a href="pages-coming-soon.html">Coming Soon</a>
                            </li>
                            <li>
                                <a href="pages-gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="pages-404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="pages-404-two.html">Error 404 Two</a>
                            </li>
                            <li>
                                <a href="pages-404-alt.html">Error 404-alt</a>
                            </li>
                            <li>
                                <a href="pages-500.html">Error 500</a>
                            </li>
                            <li>
                                <a href="pages-500-two.html">Error 500 Two</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Layouts --}}
                {{-- <li>
                    <a href="#sidebarLayouts" data-bs-toggle="collapse">
                        <i class="mdi mdi-cellphone-link"></i>
                        <span class="badge bg-blue float-end">New</span>
                        <span> Layouts </span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="layouts-horizontal.html">Horizontal</a>
                            </li>
                            <li>
                                <a href="layouts-detached.html">Detached</a>
                            </li>
                            <li>
                                <a href="layouts-two-column.html">Two Column Menu</a>
                            </li>
                            <li>
                                <a href="layouts-two-tone-icons.html">Two Tones Icons</a>
                            </li>
                            <li>
                                <a href="layouts-preloader.html">Preloader</a>
                            </li>
                        </ul>
                    </div>
                </li>
                 --}}

                {{-- Charts --}}
                {{-- <li>
                    <a href="#sidebarCharts" data-bs-toggle="collapse">
                        <i class="mdi mdi-poll"></i>
                        <span> Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="charts-apex.html">Apex Charts</a>
                            </li>
                            <li>
                                <a href="charts-flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">Chartjs Charts</a>
                            </li>
                            <li>
                                <a href="charts-peity.html">Peity Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartist.html">Chartist Charts</a>
                            </li>
                            <li>
                                <a href="charts-c3.html">C3 Charts</a>
                            </li>
                            <li>
                                <a href="charts-sparklines.html">Sparklines Charts</a>
                            </li>
                            <li>
                                <a href="charts-knob.html">Jquery Knob Charts</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Maps --}}
                {{-- <li>
                    <a href="#sidebarMaps" data-bs-toggle="collapse">
                        <i class="mdi mdi-map-outline"></i>
                        <span> Maps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                        <ul class="nav-second-level">
                            <li>
                                <a href="maps-google.html">Google Maps</a>
                            </li>
                            <li>
                                <a href="maps-vector.html">Vector Maps</a>
                            </li>
                            <li>
                                <a href="maps-mapael.html">Mapael Maps</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- Multi Level --}}
                {{-- <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                    Second Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                    Third Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel3">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                Item 2 <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel4">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> --}}

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
