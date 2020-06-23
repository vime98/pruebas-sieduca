@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Registro grupo</div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="clave">Clave</label>
                                    <input type="text" class="form-control" id="clave" maxlength="15" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="escuela">Escuela</label>
                                    <select id="escuela" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                        <option value="1">PLANTEL MORELIA</option>
                                        <option value="3">IPROLINE</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nivel">Nivel</label>
                                    <select id="nivel" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="reticula">Retícula</label>
                                    <select id="reticula" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Periodo</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periodo" id="semestre" value="Semestre" checked>
                                        <label class="form-check-label" for="semestre">Semestre (6 Meses)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periodo" id="cuatrimestre" value="Cuatrimestre">
                                        <label class="form-check-label" for="cuatrimestre">Cuatrimestre (4 Meses)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="periodo" id="modular" value="Modular">
                                        <label class="form-check-label" for="modular">Modular (Menos de 4 Meses)</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Parciales</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="parciales" id="p1" value="1" checked>
                                        <label class="form-check-label" for="p1">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="parciales" id="p2" value="2">
                                        <label class="form-check-label" for="p2">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="parciales" id="p3" value="3">
                                        <label class="form-check-label" for="p3">3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="parciales" id="p4" value="4">
                                        <label class="form-check-label" for="p4">4</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Oportunidades de extras</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="extras" id="e1" value="1" checked>
                                        <label class="form-check-label" for="e1">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="extras" id="e2" value="2">
                                        <label class="form-check-label" for="e2">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="extras" id="e3" value="3">
                                        <label class="form-check-label" for="e3">3</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Inscripción Colegiatura</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inscripcion" id="si" value="si" checked>
                                        <label class="form-check-label" for="si">Si</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="inscripcion" id="no" value="no">
                                        <label class="form-check-label" for="no">No</label>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cargar masiva de grupos</div>
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