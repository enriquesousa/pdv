@extends('admin_dashboard')
@section('admin')

    {{-- Jquery CDN Para poder usar JS --}}
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
                                <!-- Sign Up modal -->
                                @if (Auth::user()->can('categorias.add'))
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add-category-modal"><i class="mdi mdi-basket-plus-outline"></i>&nbsp;&nbsp;Agregar Categoría</button>
                                @endif
                            </ol>
                        </div>
                        <h4 class="page-title">Lista de Categorías</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Lista de Empleados</h4> --}}

                            <table id="basic-datatable" class="table dt-responsive w-100">

                                <thead>
                                    <tr>
                                        {{-- <th>Serie</th> --}}
                                        <th>Nombre</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    @foreach ($category as $key => $item)
                                        <tr>
                                            {{-- <td>{{ $key + 1 }}</td> --}}
                                            <td>{{ $item->category_name }}</td>

                                            <td>
                                                @if (Auth::user()->can('categorias.edit'))
                                                    <a href="{{ route('edit.category', $item->id) }}"
                                                        class="btn btn-blue rounded-pill waves-effect waves-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                @endif

                                                @if (Auth::user()->can('categorias.delete'))
                                                    <a href="{{ route('delete.category', $item->id) }}" id="delete"
                                                        class="btn btn-danger rounded-pill waves-effect waves-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                @endif
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

    <!-- Signup modal content -->
    <div id="add-category-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">

                    <form class="px-3" method="POST" action="{{ route('store.category') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de Categoría</label>
                            <input class="form-control" id="add_new_category" type="text" name="category_name"
                                placeholder="Agregar Categoría" data-FocusEnModal>
                        </div>


                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Guardar Cambios</button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->

    </div><!-- /.modal -->


    {{-- Para tener auto focus - Auto focus on input in bootstrap modal --}}
    <script>
        $(document).ready(function() {
            $(".modal").on('shown.bs.modal', function() {
                $("[data-FocusEnModal]", this).focus();
            });
        });
    </script>

@endsection
