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
                            <li class="breadcrumb-item"><a href="{{ route('all.advance.salary') }}">Salarios</a></li>
                            <li class="breadcrumb-item"><a href="#">Agregar Salario</a></li>
                            <li class="breadcrumb-item active">Agregar</li>
                        </ol>
                    </div>

                    <h4 class="page-title">Agregar Avance de Salario</h4>

                </div>
            </div>
        </div>     
        <!-- end page title -->

            <div class="row">
                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                             {{-- Botones --}}
                            <div class="row mb-2">

                                <div class="col-sm-4">
                                    <div class="text-sm-start">
                                        {{-- <button type="button" class="btn btn-info mb-2 me-1">
                                            <i class="mdi mdi-format-list-bulleted">
                                                Lista Avances de Salarios
                                            </i>
                                        </button> --}}
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="text-sm-middle">
                                        <a  href="{{ route('all.advance.salary') }}" 
                                            class="btn btn-info mb-2">
                                            <i class="mdi mdi-format-list-bulleted">
                                                Avances de Salarios
                                            </i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="text-sm-end">
                                        {{-- <a  href="{{ route('add.advance.salary') }}" 
                                            class="btn btn-primary mb-2">
                                            <i class="mdi mdi-plus-circle me-1">
                                                Agregar Salario
                                            </i>
                                        </a> --}}
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('advance.salary.store') }}">
                                    @csrf

                                    <h5 class="mb-1 text-uppercase"><i class="mdi mdi-account-cash"></i> Agregar
                                        Avance de Salario
                                    </h5>
                                    {{-- sub-header --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="sub-header">
                                                Esta sección de <code>Avance de Salario</code> sirve para preparar a un
                                                empleado o a todos los empleados (checkbox) para un mes seleccionado, y un
                                                año seleccionado. Una vez preparados los empleados para ese mes, ya
                                                podremos dar de alta el avances de sueldos o editar avances de sueldos para
                                                ese mes. Para pagar los sueldos del mes anterior o de algún mes determinado
                                                favor de entrar a la opción de <code>&lt;Control/Salarios/Pagos de Salarios
                                                    Ultimo Mess&gt;</code> o <code>&lt;Control/Salarios/Pagos de Salarios
                                                    Otro Mes&gt;</code>.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row">

                                        {{-- Seleccionar Nombre Empleado o todos los empleados con checkbox  --}}
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">

                                                    <h4 class="header-title">Seleccionar Empleado</h4>
                                                    <p class="sub-header">
                                                        Para dar de alta un nuevo empleado, entrar a
                                                        <code>&lt;Control/Empleados/Agregar Empleado&gt;</code>, o para
                                                        seleccionar
                                                        todos los empleados, haga click en el <code>checkbox</code>.
                                                    </p>

                                                    <select name="employee_id"
                                                        class="form-select @error('employee_id') is-invalid @enderror"
                                                        id="employee-select">
                                                        <option selected disabled>Seleccionar Empleado</option>
                                                        @foreach ($employee as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="CheckEmployees" value="1" class="form-check-input"
                                                                id="CheckBoxEmployees" onclick="disableName()">
                                                            <label class="form-check-label"
                                                                for="CheckBoxEmployees">Seleccionar a Todos
                                                                los Empleados</label>
                                                        </div>
                                                    </div>

                                                </div> <!-- end card-body -->
                                            </div>

                                        </div> <!-- end col -->

                                        {{-- Seleccionar Mes 'month' y Año 'year' --}}
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-body">

                                                    <h4 class="header-title">Seleccionar Mes y Año</h4>
                                                    <p class="sub-header">
                                                        Seleccione el mes y el año donde se va a realizar el avance de
                                                        salario. No se pude reasignar empleados a un mes donde ya fueron asignados.
                                                    </p>

                                                    <div class="row">
                                                        {{-- Seleccionar Mes 'month' --}}
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="month" class="form-label">Mes del
                                                                    Salario</label>
                                                                <select name="month"
                                                                    class="form-select @error('month') is-invalid @enderror"
                                                                    id="example-select">
                                                                    <option selected disabled>Seleccionar Mes</option>
                                                                    <option value="Enero">Enero</option>
                                                                    <option value="Febrero">Febrero</option>
                                                                    <option value="Marzo">Marzo</option>
                                                                    <option value="Abril">Abril</option>
                                                                    <option value="Mayo">Mayo</option>
                                                                    <option value="Junio">Junio</option>
                                                                    <option value="Julio">Julio</option>
                                                                    <option value="Agosto">Agosto</option>
                                                                    <option value="Septiembre">Septiembre</option>
                                                                    <option value="Octubre">Octubre</option>
                                                                    <option value="Noviembre">Noviembre</option>
                                                                    <option value="Diciembre">Diciembre</option>
                                                                </select>
                                                                @error('month')
                                                                    <span class="text-danger"> {{ $message }} </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        {{-- Seleccionar Año 'year' --}}
                                                        <div class="col-md-6">
                                                            <div class="mb-3">

                                                                <label for="year" class="form-label"
                                                                    title="Para dar de alta un nuevo año, entrar a Configuración/Datos/Años"
                                                                    tabindex="0" data-plugin="tippy"
                                                                    data-tippy-placement="top">Seleccionar Año</label>

                                                                <select name="year"
                                                                    class="form-select @error('year') is-invalid @enderror"
                                                                    id="example-select">
                                                                    <option selected disabled>Seleccionar Año</option>
                                                                    @foreach ($anios as $item)
                                                                        <option value="{{ $item->anio }}">
                                                                            {{ $item->anio }}</option>
                                                                    @endforeach
                                                                </select>

                                                                {{-- <select name="year"
                                                                    class="form-select @error('year') is-invalid @enderror"
                                                                    id="example-select">
                                                                    <option selected disabled>Seleccionar Año</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                </select> --}}

                                                                @error('year')
                                                                    <span class="text-danger"> {{ $message }} </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div> <!-- end card-body -->
                                            </div>

                                        </div> <!-- end row -->

                                        <!-- Salario Avanzado 'advance_salary' - Inline Form -->
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <h4 class="header-title">Avance de Salario</h4>

                                                        <p class="sub-header">
                                                            Entre el avance de salario que se va a realizar, lo puede dejar
                                                            en
                                                            blanco si no se va a realizar un avance de salario.
                                                        </p>

                                                        <div class="row">

                                                            {{-- Salario Avanzado 'advance_salary' --}}
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="advance_salary" class="form-label">Avance de
                                                                        Salario</label>
                                                                    <input type="number" name="advance_salary"
                                                                        class="form-control @error('advance_salary') is-invalid @enderror">
                                                                    @error('advance_salary')
                                                                        <span class="text-danger"> {{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div> <!-- end card-body -->
                                                </div> <!-- end card -->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <!-- Guardar -->
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="text-start">
                                                    <button 
                                                        type="submit"
                                                        class="btn btn-primary waves-effect waves-light mt-2">
                                                        <i class="mdi mdi-content-save"></i>
                                                        Guardar
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                
                                            </div>

                                        </div>
                                
                                    </form>

                            </div>
                            <!-- end settings content-->

                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

            <!--row Ayuda -->
            {{-- <div class="row">
                <div class="col-lg-4">
                    <div class="card card-body">
                        <h5 class="card-title">Ayuda para selección de empleado</h5>
                        <p class="card-text">Puedes dar de alta un nuevo empleado o seleccionar uno existente, para dar de alta un nuevo empleado, haz click en el botón <b>Agregar Empleado</b>.</p>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Agregar Empleado</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body text-xs-center">
                        <h5 class="card-title">Ayuda para selección del Mes</h5>
                        <p class="card-text">Puedes seleccionar un mes existente.</p>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Regresar a Panel de Control</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body text-xs-right">
                        <h5 class="card-title">Ayuda para selección del Año</h5>
                        <p class="card-text">Puedes dar de alta un nuevo año o seleccionar uno existente, para dar de alta un nuevo año, haz click en el botón <b>Agregar Año</b>.</p>
                        <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light">Agregar Año</a>
                    </div>
                </div>
            </div> --}}
            <!-- end row-->


        </div> <!-- container -->

    </div> <!-- content -->


    <script>
        // disable select employee si checkbox es marcado
        function disableName() {
            document.getElementById("employee-select").disabled = document.getElementById("CheckBoxEmployees").checked;
        }
    </script>
    
@endsection
