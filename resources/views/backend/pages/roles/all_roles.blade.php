@extends('admin_dashboard')
@section('admin')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-xl-10 col-md-12">
                <div class="page-title-box">

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('all.roles.permission') }}">Roles y Permisos</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lista Roles</a></li>
                            <li class="breadcrumb-item active">Lista</li>
                        </ol>
                    </div>

                    <h4 class="page-title">
                        <span><img src="{{ asset('backend/assets/icons/lock.svg') }}" alt="" height="40"></span>
                        Lista Roles
                    </h4>

                </div>
            </div>
        </div>
        <!-- end page title --> 


        <div class="row">
            <div class="col-xl-10 col-md-12">
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

                                    {{-- Lista Roles y Permisos --}}
                                    <a  href="{{ route('all.roles.permission') }}" 
                                        class="btn btn-info mb-2">
                                        <i class="mdi mdi-format-list-bulleted">
                                            Lista Roles y Permisos
                                        </i>
                                    </a>
                                    
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="text-sm-end">

                                    {{-- Agregar Rol --}}
                                    <a  href="{{ route('add.role') }}" 
                                        class="btn btn-primary mb-2">
                                        <i class="mdi mdi-plus-circle me-2">
                                            Agregar Rol
                                        </i>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th width="10%">Serie</th>
                                    <th>Rol</th>
                                    <th width="15%">Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($roles as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                       
                                        <td>
                                            {{-- <a href="{{ route('edit.role', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('delete.role', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a> --}}

                                            <a href="{{ route('edit.role', $item->id) }}"
                                                class="btn btn-success" 
                                                title="Editar Rol">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ route('delete.role', $item->id) }}"
                                                class="btn btn-danger" 
                                                id="delete" 
                                                title="Eliminar Rol">
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
