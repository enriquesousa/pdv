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
                            <a href="{{ route('employee.add') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="mdi mdi-backup-restore"></i>&nbsp;&nbsp;Crear Respaldo Ahora</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Respaldos</h4>
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
                                    <th>Nombre</th>
                                    <th>Tamaño</th>
                                    <th>Carpeta</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($files as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $item->getFileName() }}</td>
                                        <td>{{ formatBytes( $item->getSize() ) }}</td>
                                        <td>{{ $item->getPath() }}</td>

                                        <td>

                                            @if (Auth::user()->can('respaldo.menu'))
                                                <a href="" class="btn btn-blue rounded-pill waves-effect waves-light">Descargar</a>
                                            @endif

                                            @if (Auth::user()->can('respaldo.menu'))
                                                <a href="" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
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
