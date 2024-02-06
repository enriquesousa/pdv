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
                    <h4 class="page-title">Saldos Pendientes por Pagar</h4>
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
                                    <th>Forma de Pago</th>
                                    <th>Recibo #</th>
                                    <th>Avance</th>
                                    <th>Saldo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($allDue as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->customer->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->customer->name }}</td>
                                        <td>{{ $item->order_date }}</td>
                                        <td>{{ $item->payment_status }}</td>
                                        <td>{{ $item->invoice_no }}</td>

                                        {{-- Avance de Pago --}}
                                        <td>
                                            @php
                                                $floatVar =  floatval($item->pay); 
                                            @endphp
                                            <span class="btn btn-warning waves-effect waves-light">$ @convert($floatVar)</span>
                                        </td>

                                        {{-- Pendiente de Pago --}}
                                        <td>
                                            @php
                                                $floatVar =  floatval($item->due); 
                                            @endphp
                                            <span class="btn btn-danger waves-effect waves-light">$ @convert($floatVar)</span>
                                        </td>
                                        
                                       
                                        <td>
                                            <a href="{{ route('detail.order', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Completar Orden</a>
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
