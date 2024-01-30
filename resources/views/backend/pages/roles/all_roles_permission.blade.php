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
                            <a href="{{ route('add.roles.permission') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Asignar Roles y Permisos</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Roles y Permisos</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="header-title">Lista de Empleados</h4> --}}

                        {{-- <table id="basic-datatable" class="table dt-responsive nowrap w-100"> --}}
                        <table id="basic-datatable" class="table dt-responsive wrap w-100">
                            <thead>
                                <tr>
                                    <th>Serie</th>
                                    <th>Rol</th>
                                    <th style="width:60%">Permiso</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($roles as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @foreach ($item->permissions as $perm)
                                                <span class="badge rounded-pill bg-danger">{{ $perm->name }}</span>
                                            @endforeach
                                        </td>
                                       
                                        <td>
                                            <a href="{{ route('edit.permission', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('delete.permission', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
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
