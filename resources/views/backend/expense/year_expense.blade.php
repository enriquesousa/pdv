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
                    <h4 class="page-title">Gastos del Año:    {{ __(date("Y")) }}</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        {{-- Calcular la suma de los gastos --}}
        @php
            $year = __(date("Y"));
            $suma = App\Models\Expense::where('year', $year)->sum('amount');    
        @endphp

        {{-- Lista de Gastos --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

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
                                    <th>Año</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($yearExpense as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->details }}</td>

                                        <td>
                                            @php
                                                $floatVar =  floatval($item->amount); 
                                            @endphp
                                            $ @convert($floatVar)
                                        </td>

                                        <td>{{ $item->year }}</td>
                                        
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
