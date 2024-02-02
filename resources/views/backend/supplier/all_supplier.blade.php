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
                            <a href="{{ route('supplier.add') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="mdi mdi-account-plus-outline"></i>&nbsp;&nbsp;Agregar Proveedor</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Proveedores</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="header-title">Lista de Empleados</h4> --}}

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Serie</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Tipo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($supplier as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->type }}</td>
                                       
                                        <td>
                                            @if (Auth::user()->can('proveedor.edit'))
                                                <a href="{{ route('supplier.edit', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            @endif
                                            @if (Auth::user()->can('proveedor.delete'))
                                                <a href="{{ route('supplier.delete', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            @endif
                                            @if (Auth::user()->can('proveedor.detail'))
                                                <a href="{{ route('supplier.detail',$item->id) }}" class="btn btn-info rounded-pill waves-effect waves-light" title="Detalle"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            @endif
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
