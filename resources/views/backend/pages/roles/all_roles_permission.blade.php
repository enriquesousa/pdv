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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Roles y Permisos</a></li>
                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Lista</a></li> --}}
                            <li class="breadcrumb-item active">Lista</li>
                        </ol>
                    </div>

                    <h4 class="page-title">Roles y Permisos</h4>

                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- Botones --}}
                        <div class="row mb-2">

                            <div class="col-sm-4">
                                <div class="text-sm-start">
                                    
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="text-sm-middle">

                                    <button type="button" class="btn btn-info mb-2 me-1">
                                        <i class="mdi mdi-format-list-bulleted">
                                            Lista
                                        </i>
                                    </button>

                                    <button type="button" class="btn btn-info mb-2 me-1">
                                        <i class="mdi mdi-format-list-bulleted">
                                            Lista
                                        </i>
                                    </button>

                                    <button type="button" class="btn btn-info mb-2 me-1">
                                        <i class="mdi mdi-format-list-bulleted">
                                            Lista
                                        </i>
                                    </button>
                                    
                                    
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="text-sm-end">
                                    <a  href="{{ route('add.roles.permission') }}" 
                                        class="btn btn-primary mb-2">
                                        <i class="mdi mdi-plus-circle me-2">
                                            Asignar Roles y Permisos
                                        </i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        {{-- <table id="basic-datatable" class="table dt-responsive nowrap w-100"> --}}
                        <table id="basic-datatable" class="table dt-responsive wrap w-100">
                            <thead>
                                <tr>
                                    <th width="5%">Serie</th>
                                    <th width="10%">Rol</th>
                                    <th>Permiso</th>
                                    <th width="10%">Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($roles as $key => $item)
                                    <tr>

                                        {{-- Serie --}}
                                        <td>{{ $key + 1 }}</td>

                                        {{-- Rol --}}
                                        <td>{{ $item->name }}</td>

                                        {{-- Permiso --}}
                                        <td>
                                            @foreach ($item->permissions as $perm)
                                                <span class="badge rounded-pill bg-secondary">{{ $perm->name }}</span>
                                            @endforeach
                                        </td>
                                       
                                        {{-- Acción --}}
                                        <td>

                                            {{-- <a href="{{ route('edit.admin.roles', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('delete.admin.roles', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a> --}}

                                            <a href="{{ route('edit.admin.roles', $item->id) }}"
                                                class="btn btn-info" title="Editar Permisos">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ route('delete.admin.roles', $item->id) }}"
                                                class="btn btn-danger" id="delete" title="Eliminar Rol">
                                                <i class="fas fa-trash"></i>
                                            </a>

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
