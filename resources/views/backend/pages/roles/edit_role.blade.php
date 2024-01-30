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
                        <h4 class="page-title">Editar Rol</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- Forma --}}
                            <div class="tab-pane" id="settings">

                                <form id="myForm" method="post" action="{{ route('update.role') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $role->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar
                                        Rol
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre del Rol 'name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="name" class="form-label">Nombre del Rol</label>
                                                <input type="text" name="name" class="form-control" value="{{ $role->name }}">
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
                            <!-- end Forma -->

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
                },
                messages :{
                    name: {
                        required : 'Favor de Ingresar el Nombre del Rol',
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
