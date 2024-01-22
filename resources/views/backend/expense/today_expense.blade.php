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
                            <a href="{{ route('add.expense') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Gasto</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Gastos de Hoy:    {{ date('d-m-Y') }}</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        {{-- Calcular la suma de los gastos --}}
        @php
            $date = date('Y-m-d');
            $suma = App\Models\Expense::where('date', $date)->sum('amount');    
        @endphp

        {{-- Lista de Gastos --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- <h4 class="header-title">Fecha: {{ date('d-m-Y') }}</h4> --}}
                        @php
                            $floatVar =  floatval($suma); 
                        @endphp
                        <h4 style="font-size: 20px; font-weight: 500;" align="center">Suma de Gastos: $ @convert($floatVar)</h4>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Serie</th>
                                    <th>Detalle</th>
                                    <th>Cantidad</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($today as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->details }}</td>

                                        <td>
                                            @php
                                                $floatVar =  floatval($item->amount); 
                                            @endphp
                                            $ @convert($floatVar)
                                        </td>

                                        <td>{{ $item->month }}</td>
                                        <td>{{ $item->year }}</td>
                                       
                                        <td>
                                            <a href="{{ route('customer.edit', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
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
