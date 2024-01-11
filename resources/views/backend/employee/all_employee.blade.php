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
                            <a href="{{ route('employee.add') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Empleado</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Empleados</h4>
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
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Sueldo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($employee as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->id }}</td>

                                        {{-- Formato de fecha (date) en español (dia de la semana, dia mes y año) --}}
                                        {{-- <td>{{ \Carbon\Carbon::parse($item->date)->locale('es')->isoFormat('dddd, D [de] MMMM [de] YYYY') }}</td> --}}
                                        {{-- <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('es')->isoFormat('D[/]MMMM[/]YYYY') }}</td> --}}
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('es')->isoFormat('D[/]MMM[/]YYYY') }}</td>

                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        @php
                                            $floatvar =  floatval($item->salary); 
                                        @endphp
                                        <td>$ @convert($floatvar)</td>
                                        <td>
                                            <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('employee.delete', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
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
