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
                            <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Salario</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Todos los Abonos a Salarios</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="header-title">Lista de Empleados</h4> --}}

                        <table id="basic-datatable" class="table dt-responsive w-100">
                            <thead>
                                <tr>
                                    {{-- <th style="width:2%">Serie</th> --}}
                                    <th style="width:5%">Imagen</th>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Salario</th>
                                    <th><span>Mes</span></th>
                                    <th><span>Año</span></th>
                                    <th><span><h4>AVANCE</h4></span></th>
                                    <th><span class="badge bg-primary">Estatus</span></th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($salary as $key => $item)
                                    <tr>
                                        {{-- <td>{{ $key + 1 }}</td> --}}
                                        <td><img src="{{ asset($item->employee->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->employee->id }}</td>
                                        <td>{{ $item->employee->name }}</td>

                                        {{-- Salario --}}
                                        @php
                                            $floatVar =  floatval($item->employee->salary); 
                                        @endphp
                                        <td>$ @convert($floatVar)</td>

                                        <td>{{ $item->month }}</td>
                                        <td>{{ $item->year }}</td>

                                        {{-- Avance de Salario--}}
                                        <td>
                                            @if ($item->advance_salary == NULL)
                                                <span class="badge bg-danger">No hay Avance</span>
                                            @else    
                                                @php
                                                    $floatVar =  floatval($item->advance_salary); 
                                                @endphp
                                                $ @convert($floatVar)
                                            @endif
                                        </td>

                                        {{-- Estatus de Salario--}}
                                        <td>
                                            @if ($item->status == NULL)
                                                <span class="badge bg-danger">Pendiente de Pago</span>
                                            @else
                                                @if ($item->status == "Pagado")
                                                    <span class="badge bg-success">Pagado</span>
                                                @endif    
                                            @endif
                                        </td>


                                        <td>
                                            @if ($item->status == NULL)
                                                <a href="{{ route('edit.advance.salary', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar Avance</a>
                                            @endif

                                            <a href="{{ route('delete.advance.salary', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
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
