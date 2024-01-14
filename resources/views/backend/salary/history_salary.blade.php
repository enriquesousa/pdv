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
                            {{-- <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Salario</a> --}}
                        </ol>
                    </div>
                    {{-- <h4 class="page-title">Historial de Pagos de: {{ $historySalary->employee->name }}</h4> --}}
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- Desplegar Fecha Actual --}}
                        <h4 class="header-title">Fecha: {{ \Carbon\Carbon::parse(now())->locale('es')->isoFormat('D[/]MMMM[/]YYYY') }}</h4>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Serie</th>
                                    <th>Imagen</th>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                    <th>Salario</th>
                                    <th>Fecha</th>
                                    <th>Cantidad</th>
                                    <th>Estatus</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($historySalary as $key => $item)

                                    {{-- Mientras el año corresponda con el del mes anterior, puedes desplegar los avances --}}
                                    {{-- @if ($item->advance->year == date("Y", strtotime('-1 month'))) --}}

                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        {{-- Imagen --}}
                                        <td><img src="{{ asset($item->employee->image) }}" style="width: 50px; height: 40px;"></td>

                                        {{-- ID de Empleado --}}
                                        <td>{{ $item->employee->id }}</td>

                                        {{-- Nombre de Empleado --}}
                                        <td>{{ $item->employee->name }}</td>

                                        {{-- Mes anterior --}}
                                        {{-- <td><span class="badge bg-info"> {{ __(date("F", strtotime('-1 month'))) }} </span></td> --}}
                                        <td><span class="badge bg-info"> {{ $item->month }} </span></td>

                                        {{-- Año --}}
                                        <td><span class="badge bg-info"> {{ $item->year }} </span></td>

                                        {{-- Salario --}}
                                        @php
                                            $floatVar =  floatval($item->employee->salary); 
                                        @endphp
                                        <td>$ @convert($floatVar)</td>

                                        {{-- Fecha --}}
                                        <td>
                                            {{ \Carbon\Carbon::parse($item->sueldoPagado->created_at)->locale('es')->isoFormat('D[/]MMM[/]YYYY') }}
                                        </td>

                                        {{-- Cantidad Pagado --}}
                                        <td>
                                            @php
                                                $floatVar =  floatval($item->sueldoPagado->paid_amount); 
                                            @endphp
                                            $ @convert($floatVar)
                                        </td>
                                            
                                            
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

                                        {{-- {{ dd( $item->employee->id, $item->month, $item->year, $avance_salario,$seDebe, $item->id) }} --}}

                                        <td>
                                            @if ($item->status != NULL)
                                                <a href="{{ route('pay.salary') }}" class="btn btn-blue rounded-pill waves-effect waves-light">Detalle</a>
                                            @endif
                                        </td>
                                        
                                    </tr>

                                    {{-- @endif --}}

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
