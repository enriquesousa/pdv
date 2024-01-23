@extends('admin_dashboard')
@section('admin')
    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title POS -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">PDV</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Punto de Venta</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                {{-- 1er Columna --}}
                <div class="col-lg-6 col-xl-6">

                    {{-- Datos del Perfil --}}
                    <div class="card text-center">
                        <div class="card-body">

                            {{-- tabla --}}
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Subtotal</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mark</td>
                                            <td>
                                                <input type="number" value="0" style="width: 40px;" min="1">
                                            </td>
                                            <td>334</td>
                                            <td>4555</td>
                                            <td><a href=""><i class="fas fa-trash-alt" style="color: red"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            {{-- Resumen de la Orden --}}
                            <div class="border p-3 mt-4 mt-lg-0 rounded">
                                <h4 class="header-title mb-3">Resumen de la Orden</h4>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Grand Total :</td>
                                                <td>$1571.19</td>
                                            </tr>
                                            <tr>
                                                <td>Descuento : </td>
                                                <td>-$157.11</td>
                                            </tr>
                                            <tr>
                                                <td>IVA : </td>
                                                <td>$19.22</td>
                                            </tr>
                                            <tr>
                                                <th>Total :</th>
                                                <th>$1458.3</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>


                            <br>
                            {{-- Cliente --}}
                            <form action="">

                                <div class="form-group mb-6">
                                    {{-- <label for="customer" class="form-label">Cliente</label> --}}

                                    <a href="{{ route('customer.add') }}"
                                        class="btn btn-blue rounded-pill waves-effect waves-light mb-2">Agregar Cliente</a>

                                    <select name="customer" class="form-select">
                                        <option selected disabled>Seleccionar Cliente</option>
                                        @foreach ($customers as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <br>
                                <button class="btn btn-blue waves-effect waves-light">Realizar Venta</button>

                            </form>



                        </div>
                    </div> <!-- end card -->


                </div> <!-- end col-->

                {{-- 2da Columna --}}
                <div class="col-lg-6 col-xl-6">
                    <div class="card">

                        <div class="card-body">

                            {{-- Lista de Productos --}}
                            <div class="tab-pane" id="settings">

                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">

                                    <thead>
                                        <tr>
                                            <th>Serie</th>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($products as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><img src="{{ asset($item->product_image) }}"
                                                        style="width: 50px; height: 40px;"></td>
                                                <td>{{ $item->product_name }}</td>
                                                <td><button type="submit" style="font-size: 20px; color: #000000"><i><i
                                                                class="fas fa-plus-square"></i></i></button></td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>

                            </div>
                            <!-- end Editar datos del Perfil-->

                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->

            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
