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
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Avance de Salario</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Detalle de Salario de Empleado: {{ $detalle->employee->name }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('employee.salary.store') }}">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Pagar Salario</h5>

                                    {{-- paso el id de la tabla de advance_salaries --}}
                                    <input type="hidden" name="advance_id" value="{{ $advance_id }}">

                                    <div class="row">

                                        {{-- Nombre Empleado --}}
                                        <div class="col-md-4">
                                            <p class="mt-2 mb-1 text-muted">Nombre Empleado</p>
                                            <div class="d-flex align-items-start">
                                                <img src="{{ asset($paySalary->image) }}" alt="Arya S" class="rounded-circle me-2" height="24" />
                                                <div class="w-100">
                                                    <h5 class="mt-1 font-size-14">
                                                        {{ $paySalary->name }}
                                                    </h5>
                                                </div>
                                                <input type="hidden" name="employee_id" value="{{ $paySalary->id }}">
                                            </div>
                                        </div>

                                        {{-- Mes del Salario --}}
                                        <div class="col-md-4">
                                            <p class="mt-2 mb-1 text-muted">Mes del Salario</p>
                                            <div class="d-flex align-items-start">
                                                <i class="mdi mdi-calendar-month-outline font-18 text-success me-1"></i>
                                                <div class="w-100">
                                                    <h5 class="mt-1 font-size-14">
                                                        {{ $month }}
                                                    </h5>
                                                    <input type="hidden" name="salary_month" value="{{ $month }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Año del Salario --}}
                                        <div class="col-md-4">
                                            <p class="mt-2 mb-1 text-muted">Año del Salario</p>
                                            <div class="d-flex align-items-start">
                                                <i class="mdi mdi-calendar-month-outline font-18 text-success me-1"></i>
                                                <div class="w-100">
                                                    <h5 class="mt-1 font-size-14">
                                                        {{ $year }}
                                                    </h5>
                                                    <input type="hidden" name="salary_year" value="{{ $year }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->   
                                    

                                    <div class="row">

                                        {{-- <span class="badge bg-soft-danger text-danger float-end">High</span> --}}

                                        {{-- Salario Empleado --}}
                                        <div class="col-md-4">
                                            <p class="mt-2 mb-1 text-muted">Salario Empleado</p>
                                            <div class="d-flex align-items-start">
                                                <i class="mdi mdi-account-cash font-18 text-success me-1"></i>
                                                <div class="w-100">
                                                    @php
                                                        $amount = $paySalary->salary;
                                                        $floatVar = floatval($amount);
                                                    @endphp
                                                    <h5 class="mt-1 font-size-14">
                                                        $ @convert($floatVar)
                                                    </h5>
                                                    <input type="hidden" name="paid_amount" value="{{ $paySalary->salary }}">
                                                    <span class="badge bg-soft-danger text-success">Sueldo</span>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Avance de Salario --}}
                                        <div class="col-md-4">
                                            <p class="mt-2 mb-1 text-muted">Avance de Salario</p>
                                            <div class="d-flex align-items-start">
                                                <i class="mdi mdi-account-cash font-18 text-success me-1"></i>
                                                <div class="w-100">
                                                    @php
                                                        $amount = $avance_salario;
                                                        $floatVar = floatval($amount);
                                                    @endphp
                                                    <h5 class="mt-1 font-size-14">
                                                        $ @convert($floatVar)
                                                        <span class="badge bg-soft-danger text-warning">Avance</span>
                                                    </h5>
                                                    <input type="hidden" name="advance_salary" value="{{ $avance_salario }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Se debe Salario --}}
                                        <div class="col-md-4">
                                            <p class="mt-2 mb-1 text-muted">Se debe Salario</p>
                                            <div class="d-flex align-items-start">
                                                <i class="mdi mdi-account-cash font-18 text-success me-1"></i>
                                                <div class="w-100">

                                                    @php
                                                        $amount = $SeDebe;
                                                        $floatVar = floatval(round($amount));
                                                    @endphp

                                                    @if ($SeDebe == NULL)
                                                        <h5 class="mt-1 font-size-14">
                                                            No hay Avance
                                                        </h5>
                                                    @else
                                                        <h5 class="mt-1 font-size-14">
                                                            $ @convert($floatVar)
                                                        </h5>
                                                    @endif
                                                    
                                                    <span class="badge bg-soft-danger text-danger">Pagar</span>
                                                    <input type="hidden" name="due_salary" value="{{ round($amount, 2) }}">
                                                    <input type="hidden" name="salary_status" value="{{ "Pagado" }}">

                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                    


                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Pagar</button>
                                    </div>
                                </form>

                            </div>
                            <!-- end settings content-->

                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
