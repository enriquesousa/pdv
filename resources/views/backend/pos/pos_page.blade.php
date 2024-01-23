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

                                    @php
                                        $allCartItems = Cart::content();
                                    @endphp
                                    @foreach ($allCartItems as $item)
                                        <tbody>
                                            <tr>
                                                <td>{{ $item->name }}</td>
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
                            <div class="border p-3 mt-4 mt-lg-0 rounded">
                                <h4 class="header-title mb-3">Resumen de la Orden</h4>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Total de Piezas :</td>
                                                <td>{{ Cart::count() }}</td>
                                            </tr>
                                            <tr>
                                                <td>Subtotal :</td>
                                                <td>$ @convert(Cart::subtotal())</td>
                                            </tr>
                                            <tr>
                                                <td>IVA :</td>
                                                <td>$ @convert(Cart::tax())</td>
                                            </tr>
                                            <tr>
                                                <th>Total :</th>
                                                <th>$ @convert(Cart::total())</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>

                            <br>
                            {{-- Cliente --}}
                            <form id="myForm" method="post" action="{{ url('/create-invoice') }}">
                                @csrf

                                <div class="form-group mb-6">
                                    {{-- <label for="customer" class="form-label">Cliente</label> --}}

                                    <a href="{{ route('customer.add') }}"
                                        class="btn btn-blue rounded-pill waves-effect waves-light mb-2">Agregar Cliente</a>

                                    <select name="customer_id" class="form-select">
                                        <option selected disabled>Seleccionar Cliente</option>
                                        @foreach ($customers as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <br>
                                <button class="btn btn-blue waves-effect waves-light">Ver Recibo</button>

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
                                                <form method="POST" action="{{ url('/add-cart') }}">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="hidden" name="name" value="{{ $item->product_name }}">
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                customer_id: {
                    required : true,
                }, 
            },
            messages :{
                customer_id: {
                    required : 'Favor de Seleccionar un Cliente',
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
