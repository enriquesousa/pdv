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
                            <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Descargar Xlsx</a>
                        </div>
                        <h4 class="page-title">Importar Productos</h4>
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

                                <form id="myForm" method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">

                                        {{-- Nombre Producto 'product_name' --}}
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <label for="product_name" class="form-label">Importar archivo Xlsx</label>
                                                <input type="file" name="import_file" class="form-control">
                                            </div>
                                        </div>

                                    </div> <!-- end row -->

                                    <div class="text-begin">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Subir archivo</button>
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
