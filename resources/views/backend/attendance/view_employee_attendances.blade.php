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
                            <a href="{{ route('add.employee.attendance') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Asistencia de Empleados</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista Asistencia de Empleados</h4>
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
                                    <th>Fecha</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($allData as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->date)->locale('es')->isoFormat('D[/]MM[/]YYYY') }}</td>
                                        
                                       
                                        <td>
                                            <a href="#" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="#" class="btn btn-danger rounded-pill waves-effect waves-light">Detalle</a>
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
