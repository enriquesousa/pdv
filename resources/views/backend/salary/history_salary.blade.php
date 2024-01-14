@extends('admin_dashboard')
@section('admin')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- Standard modal content -->
        <div id="modal_assign-{{ $employee_id . '-' . $item->month . '-' . $item->year }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Text in a modal</h6>
                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        <hr>
                        <h6>Overflowing text to show scroll behavior</h6>
                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

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
                                                {{-- <a href="{{ route('history.detail.salary', $item->sueldoPagado->employee_id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Detalle</a> --}}
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_assign-{{ $item->employee_id . '-' . $item->month . '-' . $item->year }}">Detalle</button>
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
