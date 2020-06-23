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
                                    <input type="text" class="form-control" id="nombre" maxlength="54" value="ACTIVIDAD FISICA MAF-190525-MV1" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="clave">Clave</label>
                                    <input type="text" class="form-control" id="clave" maxlength="15" value="MAF-190525-MV1" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-md-5">Escuela :</dt>
                                        <dd class="col-md-7">PLANTEL MORELIA</dd>
    
                                        <dt class="col-md-5">Modalidad :</dt>
                                        <dd class="col-md-7">MIXTA</dd>
                                    
                                        <dt class="col-md-5">Retícula:</dt>
                                        <dd class="col-md-7">ACTIVIDAD FISICA </dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl class="row">
                                        <dt class="col-md-5">Nivel académico :</dt>
                                        <dd class="col-md-7">MAESTRIA</dd>
    
                                        <dt class="col-md-5">Horario :</dt>
                                        <dd class="col-md-7">SABATINO</dd>
                                    
                                        <dt class="col-md-5">Tipo de periodo escolar :</dt>
                                        <dd class="col-md-7">SEMESTRAL</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
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
                                <div class="form-group col-md-4">
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
                                <div class="form-group col-md-4">
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
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Cierre de grupo</div>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="alert" role="alert">
                                    Desde este boton puedes terminar el grupo. Al momento de terminarlo el grupo ya no podra regresar a sus estatus anterior y quedara como egresado. Asi como sus alumnos dentro del grupo. 
                                </div>
                            </div>
                            <div class="col-md-3 text-center mt-3">
                                <button type="button" class="btn btn-danger">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection