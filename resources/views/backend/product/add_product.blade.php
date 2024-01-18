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
                        <h4 class="page-title">Agregar Producto</h4>
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

                                <form id="myForm" method="post" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Agregar
                                        Producto
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre Producto 'product_name' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="product_name" class="form-label">Nombre Producto</label>
                                                <input type="text" name="product_name" class="form-control">
                                            </div>
                                        </div>

                                        {{-- Categoría 'category_id' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="category_id" class="form-label">Categoría</label>
                                                <select name="category_id" class="form-select">
                                                    <option selected disabled>Seleccionar Categoría</option>
                                                    @foreach ($category as $item)
                                                        <option value="{{ $item->id }}">{{ $item->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Supplier 'supplier_id' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="supplier_id" class="form-label">Proveedor</label>
                                                <select name="supplier_id" class="form-select">
                                                    <option selected disabled>Seleccionar Proveedor</option>
                                                    @foreach ($supplier as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        {{-- Product Code 'product_code' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="product_code" class="form-label">Código</label>
                                                <input type="text" name="product_code" class="form-control">
                                            </div>
                                        </div>


                                        {{-- Product en Almacén 'product_garage' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="product_garage" class="form-label">En Almacén</label>
                                                <input type="text" name="product_garage" class="form-control">
                                            </div>
                                        </div>

                                        {{-- Product en Tienda 'product_store' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="product_store" class="form-label">En Tienda</label>
                                                <input type="text" name="product_store" class="form-control">
                                            </div>
                                        </div>

                                        {{-- Fecha de Compra 'buying_date' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="buying_date" class="form-label">Fecha de Compra</label>
                                                <input type="date" name="buying_date" class="form-control">
                                            </div>
                                        </div>

                                        {{-- Fecha de Expiración 'expire_date' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="expire_date" class="form-label">Fecha de Expiración</label>
                                                <input type="date" name="expire_date" class="form-control">
                                            </div>
                                        </div>

                                        {{-- Precio de Compra 'buying_price' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="buying_price" class="form-label">Precio de Compra</label>
                                                <input type="text" name="buying_price" class="form-control">
                                            </div>
                                        </div>

                                        {{-- Precio de Venta 'selling_price' --}}
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="selling_price" class="form-label">Precio de Venta</label>
                                                <input type="text" name="selling_price" class="form-control">
                                            </div>
                                        </div>



                                        {{-- Foto del Producto 'product_image' --}}
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="product_image" class="form-label">Foto del Producto</label>
                                                <input type="file" name="product_image" id="image" class="form-control">
                                            </div>
                                        </div>


                                        {{-- Desplegar Foto del Producto --}}
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> 


                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Guardar</button>
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

    {{-- Js para el manejo de la validación de la forma --}}
    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    product_name: {
                        required : true,
                    }, 
                    category_id: {
                        required : true,
                    }, 
                    supplier_id: {
                        required : true,
                    }, 
                    product_code: {
                        required : true,
                    }, 
                    product_garage: {
                        required : true,
                    }, 
                    product_store: {
                        required : true,
                    }, 
                    buying_date: {
                        required : true,
                    }, 
                    expire_date: {
                        required : true,
                    }, 
                    buying_price: {
                        required : true,
                    }, 
                    selling_price: {
                        required : true,
                    }, 
                    product_image: {
                        required : true,
                    },  
                },
                messages :{
                    product_name: {
                        required : 'Favor de Ingresar el Nombre del Producto',
                    }, 
                    category_id: {
                        required : 'Favor de Seleccionar una Categoría',
                    },
                    supplier_id: {
                        required : 'Favor de Seleccionar un Proveedor',
                    },
                    product_code: {
                        required : 'Favor de Ingresar el Código del Producto',
                    },
                    product_garage: {
                        required : 'Favor de ingresar el Cantidad en almacén',
                    },
                    product_store: {
                        required : 'Favor de Ingresar el Cantidad en tienda',
                    },
                    buying_date: {
                        required : 'Favor de Ingresar la Fecha de Compra',
                    },
                    expire_date: {
                        required : 'Favor de Ingresar la Fecha de Vencimiento',
                    },
                    buying_price: {
                        required : 'Favor de Ingresar el Precio de Compra',
                    },
                    selling_price: {
                        required : 'Favor de Ingresar el Precio de Venta',
                    },
                    product_image: {
                        required : 'Favor de Ingresar la Imagen del Producto',
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

    {{-- JS para el manejo de la imagen en la forma --}}
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
