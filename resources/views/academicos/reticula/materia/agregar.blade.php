@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Agregar materia</div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="grado">Grado</label>
                                    <select id="grado" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                        <option value="1">Primer grado</option>
                                        <option value="2">Segundo grado</option>
                                        <option value="3">Tercer grado</option>
                                        <option value="4">Cuarto grado</option>
                                        <option value="5">Quinto grado</option>
                                        <option value="6">Sexto grado</option>
                                        <option value="7">Septimo grado</option>
                                        <option value="8">Octavo grado</option>
                                        <option value="9">Noveno grado</option>
                                        <option value="10">Decimo grado</option>	
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="creditos">Créditos</label>
                                    <input type="text" class="form-control" id="creditos" maxlength="3" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    <label for="nombre">Actividades</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="154" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="temario">¿ Deseas agregar el temario ?</label>
                                    <select id="temario" class="form-control" required>
                                        <option selected>No</option>
                                        <option>Si</option>	
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="materia">Materia pre-requisito</label>
                                    <select id="materia" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cargar masiva de materias</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="archivoCarga">Archivo</label>
                                    <input type="file" class="form-control-file" id="archivoCarga">
                                    <small id="foto" class="form-text text-muted">Sube un archivo xxx para hacer una carga masiva</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-success float-right">Cargar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection