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

                            {{-- <a href="{{ route('backup.now') }}" class="btn btn-primary rounded-pill waves-effect waves-light"><i class="mdi mdi-backup-restore" data-bs-toggle="modal" data-bs-target="#warning-alert-modal"></i>&nbsp;&nbsp;Crear Respaldo Ahora</a> --}}

                            <button type="button" class="btn btn-primary rounded-pill waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#warning-alert-modal"><i class="mdi mdi-backup-restore"></i>&nbsp;&nbsp;Crear Respaldo Ahora</button>

                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Respaldos</h4>
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
                                    <th>Nombre</th>
                                    <th>Tamaño</th>
                                    <th>Carpeta</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($files as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ $item->getFileName() }}</td>
                                        <td>{{ formatBytes( $item->getSize() ) }}</td>
                                        <td>{{ $item->getPath() }}</td>

                                        <td>

                                            @if (Auth::user()->can('respaldo.menu'))
                                                <a href="{{ route('download.database.backup', $item->getFileName()) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Descargar</a>
                                            @endif

                                            @if (Auth::user()->can('respaldo.menu'))
                                                <a href="{{ route('delete.database.backup', $item->getFileName()) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
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

<!-- Warning Alert Modal -->
<div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-warning h1 text-warning"></i>
                    <h4 class="mt-2">Respaldo de BD</h4>
                    <p class="mt-3">Dependiendo del tamaño de la base de datos, puede tomar varios minutos para realizar el respaldo.</p>

                    <div class="mt-4 mb-2 text-center">

                        <div id="divRespaldo">

                            <a href="{{ route('backup.now') }}" onclick="myFunction()" class="btn btn-success rounded-pill waves-effect waves-light mx-2">Respaldar</a>

                            <button type="button" class="btn btn-warning rounded-pill waves-effect waves-light mx-2" data-bs-dismiss="modal">Cerrar</button>

                        </div>

                        <div class="spinner-grow" role="status" id="spinner" hidden>
                            <span class="sr-only">Loading...</span>
                        </div>

                        {{-- <button type="button" class="btn btn-warning my-2" data-bs-dismiss="modal">Continue</button>
                        <button type="button" class="btn btn-danger my-2" data-bs-dismiss="modal">Cerrar</button> --}}
                    </div>

                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- javascript --}}
<script>
    function myFunction() {
        document.getElementById("spinner").hidden = false;
        document.getElementById("divRespaldo").hidden = true;
    }
</script>

@endsection
