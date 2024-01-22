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
                    <h4 class="page-title">Gastos del Mes:    {{ __(date("F")) }}</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        {{-- Calcular la suma de los gastos --}}
        @php
            $month = __(date("F"));
            $suma = App\Models\Expense::where('month', $month)->sum('amount');    
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
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($monthExpense as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->details }}</td>

                                        <td>
                                            @php
                                                $floatVar =  floatval($item->amount); 
                                            @endphp
                                            $ @convert($floatVar)
                                        </td>

                                        <td>{{ ucfirst($item->month) }}</td>
                                        
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
