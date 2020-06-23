@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <form action="" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Registro de retículas</div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="escuela">Escuela</label>
                                    <select id="escuela" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nivelAcademico">Nivel académico</label>
                                    <select id="nivelAcademico" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="rvoe">RVOE</label>
                                    <input type="text" class="form-control" id="rvoe" maxlength="25" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="centroTrabajo">Centro de trabajo</label>
                                    <input type="text" class="form-control" id="centroTrabajo" maxlength="25" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agregar">¿ Deseas agregar materias ?</label>
                                    <select id="agregar" class="form-control" required>
                                        <option selected="selected">No</option>
                                        <option>Si</option>
                                        <option>Cargarlas de otra reticula</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="descripcion">Descripción </label>
                                    <textarea class="form-control" id="descripcion" rows="3" maxlength="154" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Agregar materia</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button>
                            </div>
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
                            <div class="form-row d-flex justify-content-center align-items-center">
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
                                <div class="form-group col-md-2 text-center mt-3">
                                    <button type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cargar materias de otra reticula</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="reticula">Reticulas</label>
                                    <select id="reticula" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                </div>
            </div>
        </form>

        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Cargar masiva de reticulas</div>
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
@endsection