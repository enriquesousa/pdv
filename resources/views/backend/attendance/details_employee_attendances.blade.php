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
                            {{-- <a href="{{ route('customer.add') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Cliente</a> --}}
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
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Estatus</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($details as $key => $item)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->employee->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->employee->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->date)->locale('es')->isoFormat('D[/]MM[/]YYYY') }}</td>

                                        @if ($item->attend_status == 'Presente')
                                            <td style="color: #2c921a">{{ $item->attend_status }}</td>
                                        @elseif ($item->attend_status == 'Permiso')
                                            <td style="color: #a6b317">{{ $item->attend_status }}</td>
                                        @elseif ($item->attend_status == 'Ausente')
                                            <td style="color: #8a1414">{{ $item->attend_status }}</td>                                                                                    
                                        @endif

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
