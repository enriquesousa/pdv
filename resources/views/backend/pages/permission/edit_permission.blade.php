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
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Agregar Permiso</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Permiso</h4>
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

                                <form id="myForm" method="post" action="{{ route('update.permission') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $permission->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar
                                        Permiso
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre del Permiso 'name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Nombre del Permiso</label>
                                                <input type="text" name="name" class="form-control" value="{{ $permission->name }}">
                                            </div>
                                        </div>

                                        {{-- Select Grupo de Permisos 'group_name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="group_name" class="form-label">Grupo</label>
                                                <select name="group_name" class="form-select">
                                                    <option selected disabled>Seleccionar Grupo</option>

                                                    <option value="pdv" {{ $permission->group_name == 'pdv' ? 'selected' : '' }}> PDV</option>
                                                    <option value="panel" {{ $permission->group_name == 'panel' ? 'selected' : '' }}> PANEL</option>
                                                    <option value="empleado" {{ $permission->group_name == 'empleado' ? 'selected' : '' }}> Empleado</option>
                                                    <option value="cliente" {{ $permission->group_name == 'cliente' ? 'selected' : '' }}> Cliente</option>
                                                    <option value="proveedor" {{ $permission->group_name == 'proveedor' ? 'selected' : '' }}> Proveedor</option>
                                                    <option value="salario" {{ $permission->group_name == 'salario' ? 'selected' : '' }}> Salarios</option>
                                                    <option value="asistencia" {{ $permission->group_name == 'asistencia' ? 'selected' : '' }}> Asistencias</option>
                                                    <option value="categoría" {{ $permission->group_name == 'categoría' ? 'selected' : '' }}> Categorías</option>
                                                    <option value="producto" {{ $permission->group_name == 'producto' ? 'selected' : '' }}> Productos</option>
                                                    <option value="gasto" {{ $permission->group_name == 'gasto' ? 'selected' : '' }}> Gastos</option>
                                                    <option value="orden" {{ $permission->group_name == 'orden' ? 'selected' : '' }}> Ordenes</option>
                                                    <option value="almacén" {{ $permission->group_name == 'almacén' ? 'selected' : '' }}> Almacén</option>
                                                    <option value="permiso" {{ $permission->group_name == 'permiso' ? 'selected' : '' }}> Permisos</option>
                                                    <option value="datos" {{ $permission->group_name == 'datos' ? 'selected' : '' }}> Datos</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->

                                    {{-- botón Guardar --}}
                                    <div class="text-begin">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Actualizar</button>
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
                    group_name: {
                        required : true,
                    }, 
                },
                messages :{
                    name: {
                        required : 'Favor de Ingresar el Nombre del Permiso',
                    }, 
                    group_name: {
                        required : 'Favor de Seleccionar un Grupo',
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
