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
                            <a href="{{ route('pay.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Pagar Salarios Ultimo Mes</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Salarios Pagados del Mes Pasado</h4>
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
                                    <th>Mes</th>
                                    {{-- <th>Año</th> --}}
                                    <th>Salario</th>
                                    <th>Estatus</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($paidSalary as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->employee->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->employee->name }}</td>
                                        <td>{{ $item->salary_month }}</td>

                                        {{-- <td>{{ $item->year }}</td> --}}

                                        {{-- Salario --}}
                                        @php
                                            $floatVar =  floatval($item->employee->salary); 
                                        @endphp
                                        <td>$ @convert($floatVar)</td>

                                        {{-- Estatus --}}
                                        <td>
                                            <span class="badge bg-soft-danger text-success">Pagado Completo</span>
                                        </td>

                                        {{-- Botones de Acción --}}
                                        <td>
                                            <a href="{{ route('edit.advance.salary', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Historial</a>
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
