@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title mt-2">Datos generales del grupo</div>
                        <div class="card-tools">
                            <a href="{{url('/academicos/grupo/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Nombre :</dt>
                                    <dd class="col-md-7">ACTIVIDAD FISICA MAF-190525-MV1</dd>

                                    <dt class="col-md-5">Escuela :</dt>
                                    <dd class="col-md-7">PLANTEL MORELIA</dd>

                                    <dt class="col-md-5">Modalidad :</dt>
                                    <dd class="col-md-7">MIXTA</dd>
                                
                                    <dt class="col-md-5">Retícula:</dt>
                                    <dd class="col-md-7">ACTIVIDAD FISICA </dd>

                                    <dt class="col-md-5">Colegiatura:</dt>
                                    <dd class="col-md-7">$ 2500.00</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-5">Clave :</dt>
                                    <dd class="col-md-7">MAF-190525-MV1</dd>

                                    <dt class="col-md-5">Nivel académico :</dt>
                                    <dd class="col-md-7">MAESTRIA</dd>

                                    <dt class="col-md-5">Horario :</dt>
                                    <dd class="col-md-7">SABATINO</dd>
                                
                                    <dt class="col-md-5">Tipo de periodo escolar :</dt>
                                    <dd class="col-md-7">SEMESTRAL</dd>

                                    <dt class="col-md-5">Inscripcion :</dt>
                                    <dd class="col-md-7">$ 3500.00</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary m-1" data-toggle="modal" data-target="#modalCFYA">CFYA</button>
                                <button type="button" class="btn btn-secondary m-1" data-toggle="modal" data-target="#modalPlantilla">Plantilla de personal</button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Periodos escolares</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped">
                                <thead>
                                    <tr>
                                        <th>Alumnos</th>
                                        <th>Periodo</th>
                                        <th>Inicio</th>
                                        <th>Final</th>
                                        <th>Ciclo</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><button type="button" class="btn btn btn-outline-dark">5</button></td>
                                        <td>Ene - Jun</td>
                                        <td>2019-01-01</td>
                                        <td>2019-06-30</td>
                                        <td>2018-2019</td>
                                        <td>Cursando</td>
                                        <td>
                                            <a href="{{url('/academicos/grupo/periodo')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#modalFinalizar"><i class="far fa-times-circle"></i></button>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Alumnado</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped" id="table-estudiantes">
                                <thead>
                                    <tr>
                                        <th>Clave</th>
                                        <th>Informacion</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded img-thumbnail d-block" alt="Foto del alumno" width="50px" height="50px">
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>1819K1</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 	
                                            BRENDA ALEXANDRA ALVARADO PASTOR. <br>
                                            Matricula: . <br>
                                            Estado: MATRICULADO. <br>
                                            Beca: No . <br>
                                            Sin extras <br>
                                        </td>
                                        <td>
                                            <a href="{{url('/academicos/alumno')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/alumno/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded img-thumbnail d-block" alt="Foto del alumno" width="50px" height="50px">
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>1819K1</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 	
                                            BRENDA ALEXANDRA ALVARADO PASTOR. <br>
                                            Matricula: . <br>
                                            Estado: MATRICULADO. <br>
                                            Beca: No . <br>
                                            Sin extras <br>
                                        </td>
                                        <td>
                                            <a href="{{url('/academicos/alumno')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/alumno/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded img-thumbnail d-block" alt="Foto del alumno" width="50px" height="50px">
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>1819K1</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td> 	
                                            BRENDA ALEXANDRA ALVARADO PASTOR. <br>
                                            Matricula: . <br>
                                            Estado: MATRICULADO. <br>
                                            Beca: No . <br>
                                            Sin extras <br>
                                        </td>
                                        <td>
                                            <a href="{{url('/academicos/alumno')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/alumno/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalCargarAlumnos">Cargar alumnos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCFYA" tabindex="-1" role="dialog" aria-labelledby="modalCFYALabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCFYALabel">CFYA</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="grados">Grados disponibles: </label>
                        <select class="form-control" name="grados" id="grados">
                          <option value="0">Selecciona una opcion</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Buscar &nbsp;<i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modalPlantilla" tabindex="-1" role="dialog" aria-labelledby="modalPlantillaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPlantillaLabel">Plantilla de personal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="periodos">Periodos : </label>
                        <select class="form-control" name="periodos" id="periodos">
                          <option value="0">Selecciona una opcion</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Buscar &nbsp;<i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modalFinalizar" tabindex="-1" role="dialog" aria-labelledby="modalFinalizarLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalFinalizarLabel">Plantilla de personal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p>¿ Realmente desea finalizar el periodo ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="modalCargarAlumnos" tabindex="-1" role="dialog" aria-labelledby="modalCargarAlumnosLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCargarAlumnosLabel">Cargar masiva de alumnos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="archivoCarga">Archivo</label>
                        <input type="file" class="form-control-file" id="archivoCarga">
                        <small id="foto" class="form-text text-muted">Sube un archivo xxx para hacer una carga masiva</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
    </div>
@endsection