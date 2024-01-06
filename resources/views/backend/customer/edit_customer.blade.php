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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Editar Cliente</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Cliente</h4>
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

                                <form method="post" action="{{ route('customer.update') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $customer->id }}">
                                    <input type="hidden" name="imagen_original" value="{{ $customer->image }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar
                                        Cliente
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre Cliente 'name' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Nombre Cliente</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror" value="{{ $customer->name }}">
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Correo Electrónico Cliente 'email' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Correo Electrónico
                                                    Cliente</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror" value="{{ $customer->email }}">
                                                @error('email')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Teléfono Cliente 'phone' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Teléfono Cliente</label>
                                                <input type="text" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror" value="{{ $customer->phone }}">
                                                @error('phone')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Dirección Cliente 'address' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Dirección Cliente</label>
                                                <input type="text" name="address"
                                                    class="form-control @error('address') is-invalid @enderror" value="{{ $customer->address }}">
                                                @error('address')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Tienda Cliente 'shopname' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="shopname" class="form-label">Tienda Cliente</label>
                                                <input type="text" name="shopname"
                                                    class="form-control @error('shopname') is-invalid @enderror" value="{{ $customer->shopname }}">
                                                @error('shopname')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Cuenta Cliente 'account_holder' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="account_holder" class="form-label">Cuenta Cliente Nombre</label>
                                                <input type="text" name="account_holder"
                                                    class="form-control @error('account_holder') is-invalid @enderror" value="{{ $customer->account_holder }}">
                                                @error('account_holder')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Numero de Cuenta Cliente 'account_number' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="account_number" class="form-label">Numero de Cuenta Banco</label>
                                                <input type="text" name="account_number"
                                                    class="form-control @error('account_number') is-invalid @enderror" value="{{ $customer->account_number }}">
                                                @error('account_number')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                         {{-- Nombre Banco 'bank_name' --}}
                                         <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="bank_name" class="form-label">Nombre Banco</label>
                                                <input type="text" name="bank_name"
                                                    class="form-control @error('bank_name') is-invalid @enderror" value="{{ $customer->bank_name }}">
                                                @error('bank_name')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                         {{-- Sucursal Banco Cliente 'bank_branch' --}}
                                         <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="bank_branch" class="form-label">Sucursal Banco</label>
                                                <input type="text" name="bank_branch"
                                                    class="form-control @error('bank_branch') is-invalid @enderror" value="{{ $customer->bank_branch }}">
                                                @error('bank_branch')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Ciudad Cliente 'city' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="city" class="form-label">Ciudad Cliente</label>
                                                <input type="text" name="city"
                                                    class="form-control @error('city') is-invalid @enderror" value="{{ $customer->city }}">
                                                @error('city')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Foto de Cliente 'image' --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label">Foto de Cliente</label>
                                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                                @error('image')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div> <!-- end col -->


                                        {{-- Desplegar Foto de Empleado --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                                <img id="showImage" src="{{ asset($customer->image) }}"
                                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> <!-- end col -->


                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Actualizar</button>
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
