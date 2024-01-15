@extends('admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
                            <h4 class="header-title">Fecha:
                                {{ \Carbon\Carbon::parse(now())->locale('es')->isoFormat('D[/]MMMM[/]YYYY') }}</h4>

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
                                        {{-- @if ($item->advance->year == date('Y', strtotime('-1 month'))) --}}

                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            {{-- Imagen --}}
                                            <td><img src="{{ asset($item->employee->image) }}"
                                                    style="width: 50px; height: 40px;"></td>

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
                                                $floatVar = floatval($item->employee->salary);
                                            @endphp
                                            <td>$ @convert($floatVar)</td>

                                            {{-- Fecha --}}
                                            <td>
                                                {{ \Carbon\Carbon::parse($item->sueldoPagado->created_at)->locale('es')->isoFormat('D[/]MMM[/]YYYY') }}
                                            </td>

                                            {{-- Cantidad Pagado --}}
                                            <td>
                                                @php
                                                    $floatVar = floatval($item->sueldoPagado->paid_amount);
                                                @endphp
                                                $ @convert($floatVar)
                                            </td>


                                            </td>

                                            {{-- Estatus de Salario --}}
                                            <td>
                                                @if ($item->status == null)
                                                    <span class="badge bg-danger">Pendiente de Pago</span>
                                                @else
                                                    @if ($item->status == 'Pagado')
                                                        <span class="badge bg-success">Pagado</span>
                                                    @endif
                                                @endif
                                            </td>

                                            {{-- {{ dd( $item->employee->id, $item->month, $item->year, $avance_salario,$seDebe, $item->id) }} --}}

                                            <td>
                                                @if ($item->status != null)
                                                    {{-- <a href="{{ route('history.detail.salary', $item->sueldoPagado->employee_id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Detalle</a> --}}

                                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_assign-{{ $item->employee_id . '-' . $item->month . '-' . $item->year }}">Detalle</button> --}}

                                                    <a href="javascript:void(0)" id="show-user"
                                                        data-url="{{ route('history.detail.salary', $item->id) }}"
                                                        class="btn btn-blue rounded-pill waves-effect waves-light">Detalle</a>
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


            <!--  Modal - Standard modal content -->
            <div id="userShowModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="standard-modalLabel">Detalle del Pago</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <p><strong>ID:</strong> <span id="user-id"></span></p>
                            <p><strong>Nombre:</strong> <span id="user-name"></span></p>
                            <p><strong>Imagen:</strong> <span id="user-image"></span></p>
                            <p><strong>Mes:</strong> <span id="user-month"></span></p>
                            <p><strong>Año:</strong> <span id="user-year"></span></p>

                            {{-- Queda pendiente aprender como puedo pasar la variable de la imagen para poder desplegar --}}

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


        </div> <!-- container -->

    </div> <!-- content -->

    <script type="text/javascript">
        $(document).ready(function() {

            /* When click show user */
            $('body').on('click', '#show-user', function() {
                var userURL = $(this).data('url');
                $.get(userURL, function(data) {
                    $('#userShowModal').modal('show');
                    $('#user-id').text(data.employee_id);
                    $('#user-name').text(data.name);
                    $('#user-image').text(data.image);
                    $('#user-month').text(data.month);
                    $('#user-year').text(data.year);
                })
            });

        });
    </script>
@endsection
