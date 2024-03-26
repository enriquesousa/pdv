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
                            <li class="breadcrumb-item"><a href="{{ route('all.roles.permission') }}">Roles y Permisos</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Lista Permisos</a></li>
                            <li class="breadcrumb-item active">Lista</li>
                        </ol>
                    </div>

                    <h4 class="page-title">
                        <span><img src="{{ asset('backend/assets/icons/lock.svg') }}" alt="" height="40"></span>
                        Lista de Permisos
                    </h4>

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

                                    {{-- Agregar Permiso --}}
                                    <a  href="{{ route('add.permission') }}" 
                                        class="btn btn-primary mb-2">
                                        <i class="mdi mdi-plus-circle me-2">
                                            Agregar Permiso
                                        </i>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <h4 class="header-title">Lista de Permisos</h4>
                        <p class="sub-header">
                            Los nombres de los permisos, por ejemplo <code>pdv.menu</code> son exclusivos para el sistema, no puedes cambiar el nombre del permiso, ya que son exclusivos para el sistema. El nombre del grupo si lo puedes modificar si gustas.
                        </p>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th width="10%">Serie</th>
                                    <th>Nombre del Permiso</th>
                                    <th>Nombre del Grupo</th>
                                    <th width="15%">Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($permissions as $key => $item)
                                    <tr>

                                        {{-- serie --}}
                                        <td>{{ $key + 1 }}</td>

                                        {{-- nombre del permiso --}}
                                        <td>{{ $item->name }}</td>

                                        {{-- nombre del grupo --}}
                                        <td>{{ $item->group_name }}</td>
                                       
                                        {{-- acción --}}
                                        <td>
                                            {{-- <a href="{{ route('edit.permission', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('delete.permission', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a> --}}

                                            <a href="{{ route('edit.permission', $item->id) }}"
                                                class="btn btn-success" 
                                                title="Editar Permiso">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="{{ route('delete.permission', $item->id) }}"
                                                class="btn btn-danger" 
                                                id="delete" 
                                                title="Eliminar Permiso">
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
