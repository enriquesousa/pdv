@extends('admin_dashboard')
@section('admin')

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Cambiar Contraseña</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cambiar Contraseña</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            {{-- Cambiar Contraseña --}}
            <div class="row">

                {{-- 1er Columna --}}
                <div class="col-lg-8 col-xl-8">
                    <div class="card">

                        <div class="card-body">

                            {{-- Cambiar Contraseña --}}
                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('update.password') }}">
                                    @csrf


                                    <div class="row">


                                        {{-- Contraseña Actual --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Contraseña Actual</label>
                                                <input type="password" name="old_password"
                                                    class="form-control @error('old_password') is-invalid @enderror"
                                                    id="current_password">
                                                @error('old_password')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Contraseña Nueva --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Contraseña Nueva</label>
                                                <input type="password" name="new_password"
                                                    class="form-control @error('new_password') is-invalid @enderror"
                                                    id="new_password">
                                                @error('new_password')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Confirmar Contraseña --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" name="new_password_confirmation" class="form-control"
                                                    id="new_password_confirmation">

                                            </div>
                                        </div>


                                    </div> <!-- end row -->

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->


                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->

            </div>
            <!-- end row-->


        </div>
        <!-- end Editar datos del Perfil-->

    </div>


@endsection
