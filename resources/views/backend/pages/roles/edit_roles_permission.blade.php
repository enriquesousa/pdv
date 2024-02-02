@extends('admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    {{-- Para Capitalizar la primer letra de todos los labels de los check boxes --}}
    <style type="text/css">
        .form-check-label {
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

                                <form id="myForm" method="post" action="{{ route('role.permission.update',$role->id) }}" enctype="multipart/form-data">
                                    @csrf


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
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="customCheckAll">
                                                    <label class="form-check-label" for="customCheckAll">Seleccionar
                                                        Todo</label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                    <div class="row">

                                        @foreach ($permission_groups as $group)

                                        {{-- <div class="col-3"> --}}

                                            <div class="col-3">

                                                @php
                                                    $permissions = App\Models\User::getPermissionByGroupName($group->group_name);
                                                @endphp

                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="customckeck1"
                                                        {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="customckeck1"><strong>{{ $group->group_name }}</strong></label>
                                                </div>

                                            </div>

                                            <div class="col-9">

                                                {{-- {{ dd($permissions) }} --}}

                                                @foreach ($permissions as $permission)
                                                    <div class="form-check mb-2 form-check-primary">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="permission[]"
                                                            {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                            value="{{ $permission->name }}"
                                                            id="customckeck{{ $permission->id }}">
                                                        <label class="form-check-label"
                                                            for="customckeck{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                @endforeach
                                                <br>

                                            </div>

                                        {{-- </div> --}}

                                        @endforeach

                                    </div> <!-- end row -->


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
        $('#customCheckAll').click(function() {
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked', true);
            } else {
                $('input[type = checkbox]').prop('checked', false);
            }
        });
    </script>
@endsection
