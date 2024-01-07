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
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Detalles Proveedor</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Detalles Proveedor</h4>
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

                                <form method="post" action="{{ route('supplier.update') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $supplier->id }}">
                                    <input type="hidden" name="imagen_original" value="{{ $supplier->image }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Detalles
                                        Proveedor
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre Proveedor 'name' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nombre Proveedor</label>
                                                <p class="text-danger">{{ $supplier->name }}</p>
                                            </div>
                                        </div>

                                        {{-- Correo Electrónico Proveedor 'email' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Electrónico
                                                    Proveedor</label>
                                                <p class="text-danger">{{ $supplier->email }}</p>
                                            </div>
                                        </div>

                                        {{-- Teléfono Proveedor 'phone' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Teléfono Proveedor</label>
                                                <p class="text-danger">{{ $supplier->phone }}</p>
                                            </div>
                                        </div>

                                        {{-- Dirección Proveedor 'address' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Dirección Proveedor</label>
                                                <p class="text-danger">{{ $supplier->address }}</p>
                                            </div>
                                        </div>

                                        {{-- Tienda Proveedor 'shopname' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shopname" class="form-label">Tienda Proveedor</label>
                                                <p class="text-danger">{{ $supplier->shopname }}</p>
                                            </div>
                                        </div>

                                        {{-- Tipo de Proveedor 'type' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shopname" class="form-label">Tienda Proveedor</label>
                                                <p class="text-danger">{{ $supplier->type }}</p>
                                            </div>
                                        </div>


                                        {{-- Cuenta Proveedor 'account_holder' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="account_holder" class="form-label">Cuenta Proveedor Nombre</label>
                                                <p class="text-danger">{{ $supplier->account_holder }}</p>
                                            </div>
                                        </div>


                                        {{-- Numero de Cuenta Proveedor 'account_number' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="account_number" class="form-label">Numero de Cuenta Banco</label>
                                                <p class="text-danger">{{ $supplier->account_number }}</p>
                                            </div>
                                        </div>

                                         {{-- Nombre Banco 'bank_name' --}}
                                         <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="bank_name" class="form-label">Nombre Banco</label>
                                                <p class="text-danger">{{ $supplier->bank_name }}</p>
                                            </div>
                                        </div>

                                         {{-- Sucursal Banco Cliente 'bank_branch' --}}
                                         <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="bank_branch" class="form-label">Sucursal Banco</label>
                                                <p class="text-danger">{{ $supplier->bank_branch }}</p>
                                            </div>
                                        </div>


                                        {{-- Ciudad Proveedor 'city' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Ciudad Proveedor</label>
                                                <p class="text-danger">{{ $supplier->city }}</p>
                                            </div>
                                        </div>



                                        {{-- Desplegar Foto de Proveedor --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                                <img id="showImage" src="{{ asset($supplier->image) }}"
                                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> <!-- end col -->


                                    </div> <!-- end row -->

                                    
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



    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
