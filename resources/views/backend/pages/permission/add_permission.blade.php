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
                        <h4 class="page-title">Agregar Permiso</h4>
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

                                <form id="myForm" method="post" action="{{ route('store.permission') }}" enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Agregar
                                        Permiso
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre del Permiso 'name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Nombre del Permiso</label>
                                                <input type="text" name="name" class="form-control"   >
                                            </div>
                                        </div>

                                        {{-- Select Grupo de Permisos 'group_name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="group_name" class="form-label">Grupo</label>
                                                <select name="group_name" class="form-select">
                                                    <option selected disabled>Seleccionar Grupo</option>

                                                    <option value="pdv"> PDV</option>
                                                    <option value="panel"> PANEL</option>
                                                    <option value="empleado"> Empleado</option>
                                                    <option value="cliente"> Cliente</option>
                                                    <option value="proveedor"> Proveedor</option>
                                                    <option value="salario"> Salarios</option>
                                                    <option value="asistencia"> Asistencias</option>
                                                    <option value="categoría"> Categorías</option>
                                                    <option value="producto"> Productos</option>
                                                    <option value="gasto"> Gastos</option>
                                                    <option value="ventas"> Ventas</option>
                                                    <option value="almacén"> Almacén</option>
                                                    <option value="permiso"> Permisos</option>
                                                    <option value="usuarios"> Usuarios</option>
                                                    <option value="datos"> Datos</option>

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->

                                    {{-- botón Guardar --}}
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
