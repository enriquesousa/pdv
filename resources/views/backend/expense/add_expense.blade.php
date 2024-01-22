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
                        <h4 class="page-title">Agregar Gasto</h4>
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

                                <form method="post" action="{{ route('store.expense') }}" enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        Agregar Gasto
                                    </h5>

                                    <div class="row">

                                         {{-- 'fecha' --}}
                                         <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Fecha</label>
                                                <input type="date" name="fecha" class="form-control" value="{{ date('Y-m-d') }}">
                                            </div>
                                        </div>

                                        {{-- Cantidad 'amount' --}}
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="amount" class="form-label">Cantidad</label>
                                                <input type="number" name="amount" class="form-control" required>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->

                                    <div class="row">

                                        {{-- Detalles del gasto 'details' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Detalles del Gasto</label>
                                                <textarea name="details" class="form-control" id="example-textarea" rows="3" required></textarea>
                                            </div>
                                        </div>

                                        {{-- hidden 'date' --}}
                                        {{-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="hidden" name="date" class="form-control" value="{{ date('Y-m-d') }}">
                                            </div>
                                        </div> --}}

                                        {{-- hidden 'month' --}}
                                        {{-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="hidden" name="month" class="form-control" value="{{ __(date('F')) }}">
                                            </div>
                                        </div> --}}

                                        {{-- hidden 'year' --}}
                                        {{-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <input type="hidden" name="year" class="form-control" value="{{ date('Y') }}">
                                            </div>
                                        </div> --}}

                                    </div> <!-- end row -->

                                    {{-- botón de guardar --}}
                                    <div class="text-begin">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                            <i class="mdi mdi-content-save"></i>
                                            Guardar
                                        </button>
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
