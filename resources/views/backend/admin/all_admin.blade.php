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
                            <a href="{{ route('add.admin') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="mdi mdi-account-plus-outline"></i>&nbsp;&nbsp;Agregar Admin</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Administradores, Registrados Actualmente:  <span class="badge rounded-pill bg-danger" style="font-size: 12px; font-weight: 500; align-items: center">{{ count($allAdminUsers) }}</span></h4>
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
                                    <th>Rol</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($allAdminUsers as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ (!empty($item->photo) ? url('upload/admin_image/'.$item->photo) : url('upload/no_image.jpg')) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            @foreach ($item->roles as $role)
                                                <span class="badge rounded-pill bg-primary" style="font-size: 12px; font-weight: 500; align-items: center">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                       
                                        <td>
                                            <a href="{{ route('edit.admin', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('delete.admin', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
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
