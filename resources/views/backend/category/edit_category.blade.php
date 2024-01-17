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
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Editar Categoría</a></li> --}}
                            </ol>
                        </div>
                        <h4 class="page-title">Editar Categoría</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- Forma Agregar Cliente --}}
                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{ route('update.category') }}">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $category->id }}">

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar Categoría
                                    </h5>

                                    <div class="row">

                                        {{-- Categoría --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="category_name" class="form-label">Categoría</label>
                                                <input 
                                                    type="text" name="category_name"
                                                    class="form-control @error('category_name') is-invalid @enderror"
                                                    value="{{ $category->category_name }}"
                                                    autofocus>
                                                @error('category_name')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div> <!-- end row -->

                                    {{-- botón Guardar --}}
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Actualizar</button>
                                    </div>

                                </form>
                            </div>
                            <!-- end Forma Agregar Cliente -->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->



@endsection
