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
                        <h4 class="page-title">Detalles de la Orden</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Detalles de la Orden
                                    </h5>

                                    <div class="row">

                                        {{-- Foto de Cliente 'image' --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Foto de Cliente</label>
                                                <img src="{{ asset($order->customer->image) }}"
                                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> <!-- end col -->

                                        {{-- Nombre Cliente 'name' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nombre Cliente</label>
                                                <p class="text-danger">{{ $order->customer->name }}</p>
                                            </div>
                                        </div>

                                        {{-- Correo Electrónico Cliente 'email' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Electrónico Cliente</label>
                                                <p class="text-danger">{{ $order->customer->email }}</p>
                                            </div>
                                        </div>

                                        {{-- Teléfono Cliente 'phone' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Teléfono Cliente</label>
                                                <p class="text-danger">{{ $order->customer->phone }}</p>
                                            </div>
                                        </div>

                                        {{-- Fecha de la Orden 'order_date' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Fecha de la Orden</label>
                                                <p class="text-danger">{{ $order->order_date }}</p>
                                            </div>
                                        </div>

                                        {{-- Recibo # 'invoice_no' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Recibo #</label>
                                                <p class="text-danger">{{ $order->invoice_no }}</p>
                                            </div>
                                        </div>

                                        {{-- Forma de Pago 'payment_status' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Forma de Pago</label>
                                                <p class="text-danger">{{ $order->payment_status }}</p>
                                            </div>
                                        </div>

                                        {{-- Avance 'pay' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Avance</label>
                                                <p class="text-danger">{{ $order->pay }}</p>
                                            </div>
                                        </div>

                                        {{-- Pendiente 'due' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Pendiente</label>
                                                <p class="text-danger">{{ $order->due }}</p>
                                            </div>
                                        </div>
                               

                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Completar la Orden</button>
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
