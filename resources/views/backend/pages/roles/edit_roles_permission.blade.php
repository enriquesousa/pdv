@extends('admin_dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    {{-- Para Capitalizar la primer letra de todos los labels de los check boxes --}}
    <style type="text/css">
        .form-check-label{
            text-transform: capitalize;
        }
    </style>

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
                        <h4 class="page-title">Editar Permisos En Rol</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- Forma Agregar --}}
                            <div class="tab-pane" id="settings">

                                <form id="myForm" method="post" action="{{ route('store.roles.permission') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="role_id" value="{{ $role->id }}">

                                    <div class="row">

                                        {{-- Rol --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="role_id" class="form-label">Rol a Editar</label>
                                                <h3>{{ $role->name }}</h3>
                                            </div>
                                        </div>

                                        {{-- chk all --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="" id="customCheckAll">
                                                    <label class="form-check-label" for="customCheckAll">Seleccionar Todo</label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        {{-- Todos los chks de Grupos y Permisos --}}
                                        @foreach ($permission_groups as $group)
                                            <div class="row">

                                                <div class="col-md-3">

                                                    @php
                                                        $permissions = App\Models\User::getPermissionByGroupName($group->group_name);
                                                    @endphp

                                                    <div class="form-check mb-2 form-check-primary">
                                                        <input class="form-check-input" type="checkbox" value="" id="customckeck1" {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="customckeck1">{{ $group->group_name }}</label>
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-6">
                                                        @foreach ($permissions as $permission)
                                                            <div class="form-check mb-2 form-check-primary">
                                                                <input class="form-check-input" type="checkbox" name="permission[]" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}  value="{{ $permission->id }}" id="customckeck{{ $permission->id }}">
                                                                <label class="form-check-label" for="customckeck{{ $permission->id }}">{{ $permission->name }}</label>
                                                            </div>
                                                        @endforeach
                                                </div>

                                                <hr>

                                            </div>
                                        @endforeach

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

    {{-- JS para seleccionar todos los checkbox --}}
    <script type="text/javascript">
        $('#customCheckAll').click(function(){
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked',true);
            }else{
                $('input[type = checkbox]').prop('checked',false);
            } 
        });
   </script>

   {{-- Js para el manejo de la validación de la forma --}}
   <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                role_id: {
                    required : true,
                }, 
                 
            },
            messages :{
                role_id: {
                    required : 'Favor de Ingresar el Rol',
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
