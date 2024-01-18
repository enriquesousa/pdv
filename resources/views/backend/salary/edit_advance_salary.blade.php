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
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Editar Salario</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Salario</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('advance.salary.update') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $salary->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Editar
                                        Salario Avanzado
                                    </h5>

                                    <div class="row">

                                        {{-- Select Nombre Empleado 'employee_id' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="employee_id" class="form-label">Seleccionar Empleado</label>
                                                <select name="employee_id"
                                                    class="form-select @error('employee_id') is-invalid @enderror"
                                                    id="example-select">
                                                    <option selected disabled>Seleccionar Empleado</option>
                                                    @foreach ($employee as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $salary->employee_id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        {{-- Seleccionar Mes 'month' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="month" class="form-label">Salario Mensual</label>
                                                <select name="month"
                                                    class="form-select @error('month') is-invalid @enderror"
                                                    id="example-select">
                                                    <option selected disabled>Select Month </option>
                                                    <option value="Enero"
                                                        {{ $salary->month == 'Enero' ? 'selected' : '' }}>Enero</option>
                                                    <option value="Febrero"
                                                        {{ $salary->month == 'Febrero' ? 'selected' : '' }}>Febrero</option>
                                                    <option value="Marzo"
                                                        {{ $salary->month == 'Marzo' ? 'selected' : '' }}>Marzo</option>
                                                    <option value="Abril"
                                                        {{ $salary->month == 'Abril' ? 'selected' : '' }}>Abril</option>
                                                    <option value="Mayo" {{ $salary->month == 'Mayo' ? 'selected' : '' }}>
                                                        Mayo</option>
                                                    <option value="Junio"
                                                        {{ $salary->month == 'Junio' ? 'selected' : '' }}>Junio</option>
                                                    <option value="Julio"
                                                        {{ $salary->month == 'Julio' ? 'selected' : '' }}>Julio</option>
                                                    <option value="Agosto"
                                                        {{ $salary->month == 'Agosto' ? 'selected' : '' }}>Agosto</option>
                                                    <option value="Septiembre"
                                                        {{ $salary->month == 'Septiembre' ? 'selected' : '' }}>Septiembre
                                                    </option>
                                                    <option value="Octubre"
                                                        {{ $salary->month == 'Octubre' ? 'selected' : '' }}>Octubre
                                                    </option>
                                                    <option value="Noviembre"
                                                        {{ $salary->month == 'Noviembre' ? 'selected' : '' }}>Noviembre
                                                    </option>
                                                    <option value="Diciembre"
                                                        {{ $salary->month == 'Diciembre' ? 'selected' : '' }}>Diciembre
                                                    </option>
                                                </select>
                                                @error('month')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Seleccionar Año 'year' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="year" class="form-label">Salario Año</label>
                                                <select name="year"
                                                    class="form-select @error('year') is-invalid @enderror"
                                                    id="example-select">
                                                    <option selected disabled>Seleccionar Año</option>
                                                    <option value="2022" {{ $salary->year == '2022' ? 'selected' : '' }}>
                                                        2022</option>
                                                    <option value="2023" {{ $salary->year == '2023' ? 'selected' : '' }}>
                                                        2023</option>
                                                    <option value="2024" {{ $salary->year == '2024' ? 'selected' : '' }}>
                                                        2024</option>
                                                    <option value="2025" {{ $salary->year == '2025' ? 'selected' : '' }}>
                                                        2025</option>
                                                    <option value="2026" {{ $salary->year == '2026' ? 'selected' : '' }}>
                                                        2026</option>
                                                    <option value="2027" {{ $salary->year == '2027' ? 'selected' : '' }}>
                                                        2027</option>
                                                </select>
                                                @error('year')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Salario Avanzado 'advance_salary' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="advance_salary" class="form-label">Salario Avanzado</label>
                                                <input type="number" name="advance_salary"
                                                    class="form-control @error('advance_salary') is-invalid @enderror"
                                                    value="{{ $salary->advance_salary }}">
                                                @error('advance_salary')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Guardar</button>
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
