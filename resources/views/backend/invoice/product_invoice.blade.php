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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Recibo de Cliente</a></li>
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Extra Pages</a></li> --}}
                                {{-- <li class="breadcrumb-item active">Invoice</li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Recibo de Cliente</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Logo & title -->
                            <div class="clearfix">
                                <div class="float-start">
                                    <div class="auth-logo">
                                        <div class="logo logo-dark">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-dark2.png') }}"
                                                    alt="" height="22">
                                            </span>
                                        </div>

                                        <div class="logo logo-light">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-light2.png') }}"
                                                    alt="" height="22">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <h4 class="m-0 d-print-none">Recibo</h4>
                                </div>
                            </div>

                            {{-- Columna 1: Saludo, Columna 2: Fecha, Estatus y Numero de Orden --}}
                            <div class="row">

                                {{-- Columna 1: Saludo --}}
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <p><b>Saludos, {{ $customer->name }}</b></p>
                                        <p class="text-muted">Muchas gracias porque seguir comprando nuestros productos.
                                            Nuestra empresa promete proporcionarle productos de alta calidad, así como
                                            excelentes Servicio de atención al cliente para cada transacción.</p>
                                    </div>

                                </div><!-- end col -->

                                {{-- Columna 2: Fecha, Estatus y Numero de Orden --}}
                                <div class="col-md-4 offset-md-2">
                                    <div class="mt-3 float-end">
                                        <p><strong>Fecha : </strong> <span class="float-end"> &nbsp;&nbsp;&nbsp;&nbsp; Jan
                                                17, 2016</span></p>
                                        <p><strong>Estatus : </strong> <span class="float-end"><span
                                                    class="badge bg-danger">Unpaid</span></span></p>
                                        <p><strong>No. : </strong> <span class="float-end">000028 </span></p>
                                    </div>
                                </div><!-- end col -->

                            </div>

                            {{-- Dirección de Facturación y Dirección de Entrega --}}
                            <div class="row mt-3">

                                {{-- Dirección de Facturación --}}
                                <div class="col-sm-6">
                                    <h6>Dirección de Facturación</h6>
                                    <address>
                                        {{ $customer->name }}<br>
                                        {{ $customer->address }}<br>
                                        {{ $customer->city }}<br>
                                        <abbr title="Comprador">C:</abbr> {{ $customer->shopname }}<br>
                                        <abbr title="Teléfono">T:</abbr> {{ $customer->phone }}<br>
                                        <abbr title="Correo">E:</abbr> {{ $customer->email }}
                                    </address>
                                </div> <!-- end col -->

                                {{-- Dirección de Entrega --}}
                                <div class="col-sm-6">
                                    <h6>Dirección de Entrega</h6>
                                    <address>
                                        {{ $customer->name }}<br>
                                        {{ $customer->address }}<br>
                                        {{ $customer->city }}<br>
                                        <abbr title="Comprador">C:</abbr> {{ $customer->shopname }}<br>
                                        <abbr title="Teléfono">T:</abbr> {{ $customer->phone }}<br>
                                        <abbr title="Correo">E:</abbr> {{ $customer->email }}
                                    </address>
                                </div> <!-- end col -->

                            </div>

                            {{-- Tabla de detalles --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mt-4 table-centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Producto</th>
                                                    <th style="width: 10%">Cantidad</th>
                                                    <th style="width: 10%">Precio Unitario</th>
                                                    <th style="width: 10%" class="text-end">Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @php
                                                    $sl = 1;
                                                @endphp
                                                @foreach ($content as $key => $item)
                                                    <tr>
                                                        <td>{{ $sl++ }}</td>
                                                        <td>
                                                            {{-- <p class="text-muted mb-1">{{ $item->name }}</p> --}}
                                                            <p class="text-pretty mb-1">{{ $item->name }}</p>
                                                        </td>
                                                        <td>{{ $item->qty }}</td>
                                                        <td>$ @convert($item->price)</td>
                                                        @php
                                                            $total = $item->price * $item->qty;
                                                        @endphp
                                                        <td class="text-end">$ @convert($total)</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end col -->
                            </div>

                            {{-- Notas, Subtotal y Total de la factura --}}
                            <div class="row">

                                {{-- Columna 1: Notas --}}
                                <div class="col-sm-6">
                                    <div class="clearfix pt-5">
                                        <h6 class="text-muted">Notas:</h6>

                                        <small class="text-muted">
                                            Todas las cuentas deben pagarse dentro de los 7 días posteriores a la recepción
                                            de factura. A pagar con cheque o tarjeta de crédito o pago directo en línea. Si
                                            la cuenta no se paga dentro de los 7 días, los detalles de los créditos
                                            suministrado como confirmación del trabajo realizado se cobrará el Tarifa
                                            cotizada acordada anotada anteriormente.
                                        </small>
                                    </div>
                                </div> <!-- end col -->

                                {{-- Columna 2: Sub-total y Total --}}
                                <div class="col-sm-6">
                                    <div class="float-end">
                                        <p><b>Sub-total:</b> <span class="float-end">$ @convert(Cart::subtotal())</span></p>
                                        <p><b>IVA (15%):</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; $
                                                @convert(Cart::tax())</span>
                                        </p>
                                        <h3>$ @convert(Cart::total()) MX</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- end col -->

                            </div>

                            {{-- Botones para Imprimir Factura PDF y Facturar(Guardar la Orden)  --}}
                            <div class="mt-4 mb-1">
                                <div class="text-end d-print-none">

                                    {{-- botón imprimir --}}
                                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i
                                            class="mdi mdi-printer me-1"></i> Imprimir</a>

                                    {{-- botón para abrir modal Guardar la Factura --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#factura-modal">Facturar</button>

                                </div>
                            </div>

                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->


    <!-- Ventana Modal Facturar -->
    <div id="factura-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">

                    {{-- Nombre y Total --}}
                    <div class="text-center mt-2 mb-4">
                        <div class="auth-logo">
                            <h3>Factura de: {{ $customer->name }}</h3>
                            <h3>Total: $ @convert(Cart::total())</h3>
                        </div>
                    </div>

                    <form class="px-3" method="POST" action="{{ url('/final/invoice') }}">
                        @csrf


                        {{-- Forma de pago --}}
                        <div class="mb-3">
                            <label for="payment_status" class="form-label">Forma de pago</label>
                            <select name="payment_status" class="form-select" id="example-select">
                                <option selected disabled>Seleccionar Forma de Pago</option>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                                <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                            </select>
                        </div>

                        {{-- Pago --}}
                        <div class="mb-3">
                            <label for="pay" class="form-label">Pago</label>
                            <input class="form-control" type="text" name="pay" placeholder="Pagar ahora">
                        </div>


                        {{-- Pendiente --}}
                        <div class="mb-3">
                            <label for="due" class="form-label">Pendiente</label>
                            <input class="form-control" type="text" name="due" placeholder="Pendiente">
                        </div>

                        {{-- Pasar los demás datos de la orden --}}
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                        <input type="hidden" name="order_date" value="{{ \Carbon\Carbon::parse(date('Y-m-d'))->locale('es')->isoFormat('D[/]MMMM[/]YYYY') }}">
                        <input type="hidden" name="order_status" value="pendiente">
                        <input type="hidden" name="total_products" value="{{ Cart::count() }}">
                        <input type="hidden" name="sub_total" value="{{ Cart::subtotal() }}">
                        <input type="hidden" name="iva" value="{{ Cart::tax() }}">
                        <input type="hidden" name="total" value="{{ Cart::total() }}"> 


                        {{-- Botón Completar la Orden --}}
                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Completar la Orden</button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->

    </div><!-- /.modal -->

@endsection
