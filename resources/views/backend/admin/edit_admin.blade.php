@extends('admin_dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Agregar Cliente</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Admin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- Forma Agregar Cliente --}}
                            <div class="tab-pane" id="settings">

                                <form id="myForm" method="post" action="{{ route('update.admin') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $adminUser->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar
                                        Admin
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre 'name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Nombre</label>
                                                <input type="text" name="name" class="form-control" value="{{ $adminUser->name }}">
                                            </div>
                                        </div>

                                        {{-- Email 'email' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="email" class="form-label">Correo Electrónico</label>
                                                <input type="email" name="email" class="form-control" value="{{ $adminUser->email }}">
                                            </div>
                                        </div>

                                        {{-- Phone 'phone' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="phone" class="form-label">Teléfono</label>
                                                <input type="text" name="phone" class="form-control" value="{{ $adminUser->phone }}">
                                            </div>
                                        </div>


                                        {{-- Asignar Rol --}}
                                        <div class="col-md-4">
                                            <div class="form-group mb-3">
                                                <label for="category_id" class="form-label">Asignar Rol</label>
                                                <select name="roles" class="form-select">
                                                    <option selected disabled>Seleccionar un Rol</option>
                                                    @foreach ($roles as $item)
                                                        <option value="{{ $item->name }}" {{ $adminUser->hasRole($item->name) ? 'selected' : '' }}>{{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                    </div> <!-- end row -->

                                    <div class="text-begin">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Guardar</button>
                                    </div>

                                </form>

                            </div>
                            <!-- end Forma Agregar Cliente -->


                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->

    {{-- Js para el manejo de la validación de la forma --}}
    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    name: {
                        required : true,
                    }, 
                    email: {
                        required : true,
                    }, 
                    phone: {
                        required : true,
                    }, 
                    roles: {
                        required : true,
                    }, 
                },
                messages :{
                    name: {
                        required : 'Favor de Ingresar Nombre',
                    }, 
                    email: {
                        required : 'Favor de Ingresar Email',
                    },
                    phone: {
                        required : 'Favor de Ingresar Teléfono',
                    },
                    roles: {
                        required : 'Favor de Seleccionar un Rol',
                    },
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>

    

@endsection
