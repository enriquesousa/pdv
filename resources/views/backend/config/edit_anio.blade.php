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
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Editar Empleado</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Año</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- end timeline content-->

                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('anio.update') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $anio->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar Año</h5>

                                    <div class="row">

                                        {{-- Nombre de Año --}}
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Año</label>
                                                <input type="number" name="anio"
                                                    class="form-control @error('anio') is-invalid @enderror"
                                                    value="{{ $anio->anio }}">
                                                @error('anio')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Actualizar</button>
                                    </div>
                                </form>

                            </div>
                            <!-- end settings content-->


                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->


@endsection
