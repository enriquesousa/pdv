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
                            <a href="{{ route('import.product') }}" class="btn btn-info rounded-pill waves-effect waves-light">Importar de Excel</a>
                            &nbsp;&nbsp;&nbsp;

                            <a href="{{ route('export.product') }}" class="btn btn-danger rounded-pill waves-effect waves-light">Exportar a Excel</a>
                            &nbsp;&nbsp;&nbsp;
                            
                            <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Producto</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Productos</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- Tabla de Lista de Productos --}}
                        <table id="basic-datatable" class="table dt-responsive w-100">
                            <thead>
                                <tr>
                                    {{-- <th style="width: 5%">Serie</th> --}}
                                    <th style="width: 10%">Imagen</th>
                                    <th style="width: 25%">Nombre</th>
                                    <th style="width: 10%">Categoría</th>
                                    <th style="width: 10%">Almacén</th>
                                    <th style="width: 10%">Proveedor</th>
                                    <th style="width: 10%">Código</th>
                                    <th style="width: 10%">Precio</th>
                                    <th style="width: 15%">Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($product as $key => $item)
                                    <tr>
                                        {{-- <td>{{ $key + 1 }}</td> --}}
                                        <td><img src="{{ asset($item->product_image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->category->category_name }}</td>
                                        <td>{{ $item->product_store }}</td>
                                        <td>{{ $item->supplier->name }}</td>
                                        <td>{{ $item->product_code }}</td>
                                        <td>
                                            @php
                                                $floatVar =  floatval($item->selling_price); 
                                            @endphp
                                            $ @convert($floatVar)
                                        </td>

                                       
                                        <td>
                                            <a href="{{ route('edit.product', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <a href="{{ route('barcode.product', $item->id) }}" class="btn btn-info rounded-pill waves-effect waves-light"><i class="fa fa-barcode" aria-hidden="true"></i></a>

                                            <a href="{{ route('delete.product', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>

                                @endforeach


                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->

</div> <!-- content -->


@endsection
