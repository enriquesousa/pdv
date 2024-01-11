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
                    <h4 class="page-title">Pagar Salario</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- Desplegar este mes y año--}}
                        <h4 class="header-title">{{ __(date("F")) }} {{ date("Y") }}</h4>

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
                                    <th>Avance</th>
                                    <th>Se debe</th>
                                    <th>Estatus</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($employee as $key => $item)

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

                                        {{-- Avance de Salario--}}
                                        <td>
                                            @if ($item->advance_salary == NULL)
                                                <span class="badge bg-danger">No hay Avance</span>
                                                @php
                                                    $avance_salario = NULL;
                                                @endphp
                                            @else    
                                                @php
                                                    $floatVar =  floatval($item->advance_salary); 
                                                    $avance_salario = $item->advance_salary;
                                                @endphp
                                                $ @convert($floatVar)
                                            @endif
                                        </td>

                                        {{-- Se debe --}}
                                        <td>
                                            @php
                                                $amount = $item->employee->salary - $item->advance_salary;
                                                $seDebe = $amount;
                                                $floatVar =  floatval($amount); 
                                            @endphp
                                            <strong> <span class="badge bg-warning">$ @convert($floatVar)</span> </strong>
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
                                                <a href="{{ route('pay.now.salary', [$item->employee->id,$item->month,$item->year,$avance_salario,$seDebe,$item->id]) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Pagar Ahora</a>
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
