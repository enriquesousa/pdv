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

                    {{-- Tabla de PDV, Resumen de la Orden y Seleccionar Cliente --}}
                    <div class="card text-center">
                        <div class="card-body">

                            {{-- Tabla de PDV --}}
                            <div class="table-responsive mb-1">
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

                                    @php
                                        $allCartItems = Cart::content();
                                    @endphp
                                    @foreach ($allCartItems as $item)
                                        <tbody>
                                            <tr>
                                                {{-- @php
                                                    $in = $item->name;
                                                    $out = strlen($in) > 50 ? substr($in,0,50)."..." : $in;
                                                @endphp --}}
                                                <td>{{ mb_strimwidth($item->name, 0, 50, "...") }}</td>
                                                <td>
                                                    <form method="post" action="{{ url('/cart-update/' . $item->rowId) }}">
                                                        @csrf
                                                        <input type="number" name="qty" value="{{ $item->qty }}"
                                                            style="width: 40px;" min="1">
                                                        <button type="submit" class="btn btn-success btn-sm"
                                                            style="margin-top: 1px;"><i
                                                                class="fas fa-sync-alt"></i></button>
                                                    </form>
                                                </td>
                                                <td>$ {{ $item->price }}</td>
                                                <td>$ {{ $item->price * $item->qty }}</td>
                                                <td>
                                                    <a href="{{ url('/cart-remove/' . $item->rowId) }}">
                                                        <i class="fas fa-trash-alt" style="color: red"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>

                            {{-- Resumen de la Orden --}}
                            {{-- <p class="mt-2"><strong>Total de Piezas:</strong> {{ Cart::count() }},
                                <strong>Subtotal:</strong> $ @convert(Cart::subtotal()), <strong>IVA:</strong> $ @convert(Cart::tax()),
                                <strong>Total:</strong> $ @convert(Cart::total())</p> --}}
                            <div class="row g-4">

                                {{-- Total de Piezas --}}
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputGrid"
                                            placeholder="Total de Piezas" value="{{ Cart::count() }}" disabled="">
                                        <label for="floatingInputGrid">Total de Piezas</label>
                                    </div>
                                </div>

                                {{-- Subtotal --}}
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputGrid"
                                            placeholder="Subtotal" value="$ @convert(Cart::subtotal())" disabled="">
                                        <label for="floatingInputGrid">Subtotal</label>
                                    </div>
                                </div>

                                {{-- IVA --}}
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="IVA"
                                            value="$ @convert(Cart::tax())" disabled="">
                                        <label for="floatingInputGrid">IVA</label>
                                    </div>
                                </div>

                                {{-- Total --}}
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInputGrid"
                                            placeholder="Total" value="$ @convert(Cart::total())" disabled="">
                                        <label for="floatingInputGrid">Total</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> <!-- end card -->


                    {{-- Cliente --}}
                    <form id="myForm" method="post" action="{{ url('/create-invoice') }}">
                        @csrf

                        <div class="row g-2 mb-4">

                            <div class="col-md">
                                <div class="form-floating">
                                    <select name="customer_id" class="form-select" id="floatingSelectGrid">
                                        <option selected disabled>Seleccionar Cliente</option>
                                        @foreach ($customers as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelectGrid">Cliente</label>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-floating">
                                    <a href="{{ route('customer.add') }}"
                                        class="btn btn-outline-primary waves-effect waves-light"
                                        id="floatingInputGrid">Agregar Cliente</a>
                                    <label for="floatingInputGrid"></label>
                                </div>
                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Ver Recibo</button>
                        </div>

                    </form>


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
                                                <form method="POST" action="{{ url('/add-cart') }}">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="hidden" name="name"
                                                        value="{{ $item->product_name }}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <input type="hidden" name="price"
                                                        value="{{ $item->selling_price }}">

                                                    <td>{{ $key + 1 }}</td>
                                                    <td><img src="{{ asset($item->product_image) }}"
                                                            style="width: 50px; height: 40px;"></td>
                                                    <td>{{ $item->product_name }}</td>

                                                    {{-- botón para agregar item al carrito --}}
                                                    <td><button type="submit" style="font-size: 20px; color: #000000">
                                                            <i class="fas fa-plus-square"></i>
                                                        </button>
                                                    </td>
                                                </form>
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


    {{-- Js para el manejo de la validación de la forma --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    customer_id: {
                        required: true,
                    },
                },
                messages: {
                    customer_id: {
                        required: 'Favor de Seleccionar un Cliente',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
