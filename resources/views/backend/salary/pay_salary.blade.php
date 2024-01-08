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
                    <h4 class="page-title">Lista de Salarios Pagados</h4>
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
                                    <th>Nombre</th>
                                    <th>Mes</th>
                                    <th>Salario</th>
                                    <th>Avance</th>
                                    <th>Se debe</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($employee as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->name }}</td>

                                        {{-- Mes anterior --}}
                                        <td><span class="badge bg-info"> {{ __(date("F", strtotime('-1 month'))) }} </span></td>


                                        {{-- Salario --}}
                                        @php
                                            $floatVar =  floatval($item->salary); 
                                        @endphp
                                        <td>$ @convert($floatVar)</td>

                                        {{-- Avance de Salario--}}
                                        <td>
                                            @if ($item->advance->advance_salary == NULL)
                                                <span class="badge bg-danger">No hay Avance</span>
                                            @else    
                                                @php
                                                    $floatVar =  floatval($item->advance->advance_salary); 
                                                @endphp
                                                $ @convert($floatVar)
                                            @endif
                                        </td>

                                        <td>
                                            @php
                                                $amount = $item->salary - $item->advance->advance_salary;
                                                $floatVar =  floatval($amount); 
                                            @endphp
                                            <strong> <span class="badge bg-warning">$ @convert($floatVar)</span> </strong>
                                        </td>


                                        <td>
                                            <a href="{{ route('edit.advance.salary', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Pagar Ahora</a>
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
