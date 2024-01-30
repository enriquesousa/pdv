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
                        <h4 class="page-title">Agregar Rol en Permisos</h4>
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

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Agregar Rol en Permisos</h5>

                                    <div class="row">

                                        {{-- Select Role 'group_name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="group_name" class="form-label">Roles</label>
                                                <select name="group_name" class="form-select">
                                                    <option selected disabled>Seleccionar Rol</option>

                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="" id="customckeck15" checked="">
                                                    <label class="form-check-label" for="customckeck15">Primary</label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="" id="customckeck1" checked="">
                                                    <label class="form-check-label" for="customckeck1">Primary</label>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="" id="customckeck2" checked="">
                                                    <label class="form-check-label" for="customckeck2">Primary</label>
                                                </div>
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


@endsection
