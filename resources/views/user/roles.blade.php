@extends('layout.main')

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Asignar roles</h3>
                
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-center pb-4">
                            <div class="form-group">
                                <label for="slct-roles">Seleccione un rol para asignar</label>
                                <select name="slct-roles" class="form-control" id="slct-roles"></select>
                            </div>
                            <button class="btn btn-primary btn-block" id="assign-role-btn">Asignar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-2">
                            <input type="hidden" id="user-at-roles" value="{{ $user->id }}">
                        </div>
                    </div>
                    <table class="table table-head-fixed text-nowrap" id="assigned-roles-table">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-user-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- <div class="overlay d-flex justify-content-center align-items-center">
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div> -->
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Confirmación de eliminación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro de querer eliminar el registro seleccionado?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" id="user-confirm-delete">Eliminar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script src="{{ asset('js/user/roles.js')}}"></script>
@endsection
