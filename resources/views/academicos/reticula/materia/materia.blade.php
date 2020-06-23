@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-3">Datos generales de la materia</h3>
                        <div class="card-tools">
                            <a href="{{url('/academicos/reticula/materia/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>   
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row container">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <dl class="row">
                                    <dt class="col-md-5">Nombre :</dt>
                                    <dd class="col-md-7">FUNDAMENTOS ESTADISTICOS</dd>

                                    <dt class="col-md-5">Créditos :</dt>
                                    <dd class="col-md-7">8 puntos.</dd>
                                </dl>
                            </div>
                            <div class="col-md-5">
                                <dl class="row">
                                    <dt class="col-md-5">Grado :</dt>
                                    <dd class="col-md-7">1º grado.</dd>

                                    <dt class="col-md-5">Actividades :</dt>
                                    <dd class="col-md-7">TEORICO PRACTICAS</dd>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Temario</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header bg-success">
                                <h3 class="card-title">Tema 1</h3>
                            </div>
                            <div class="card-body">
                                <p><i class="fa fa-list-alt"></i> Descripcion: Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore saepe dolores blanditiis unde, accusamus a quos delectus necessitatibus, sunt minima exercitationem molestiae suscipit possimus? Repellendus mollitia nobis quis minus modi!</p>
                                <hr>
                                <h6>Subtema 1</h6>
                                <hr>
                                <h6>Subtema 2</h6>
                                <hr>
                                <h6>Subtema 3</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-success">
                                <h3 class="card-title">Tema 2</h3>
                            </div>
                            <div class="card-body">
                                <p><i class="fa fa-list-alt"></i> Descripcion: Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore saepe dolores blanditiis unde, accusamus a quos delectus necessitatibus, sunt minima exercitationem molestiae suscipit possimus? Repellendus mollitia nobis quis minus modi!</p>
                                <hr>
                                <h6>Subtema 1</h6>
                                <hr>
                                <h6>Subtema 2</h6>
                                <hr>
                                <h6>Subtema 3</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-success">
                                <h3 class="card-title">Tema 3</h3>
                            </div>
                            <div class="card-body">
                                <p><i class="fa fa-list-alt"></i> Descripcion: Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore saepe dolores blanditiis unde, accusamus a quos delectus necessitatibus, sunt minima exercitationem molestiae suscipit possimus? Repellendus mollitia nobis quis minus modi!</p>
                                <hr>
                                <h6>Subtema 1</h6>
                                <hr>
                                <h6>Subtema 2</h6>
                                <hr>
                                <h6>Subtema 3</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#temaModal">Agregar Tema</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pre-requisitos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped" id="table-materias">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Grado</th>
                                        <th>Créditos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FUNDAMENTOS ESTADISTICOS</td>
                                        <td>1º grado.</td>
                                        <td>8 puntos.</td>
                                    </tr>
                                    <tr>
                                        <td>FUNDAMENTOS ESTADISTICOS</td>
                                        <td>1º grado.</td>
                                        <td>8 puntos.</td>
                                    </tr>
                                    <tr>
                                        <td>FUNDAMENTOS ESTADISTICOS</td>
                                        <td>1º grado.</td>
                                        <td>8 puntos.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <form action="" method="post">
                            <div class="form-row d-flex justify-content-center align-items-center">
                                <div class="form-group col-md-4">
                                    <label for="materia">Agregar pre-requisito</label>
                                    <select id="materia" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-8 mt-4">
                                    <button type="button" class="btn btn-primary float-right">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="modal fade" id="temaModal" tabindex="-1" role="dialog" aria-labelledby="temaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="temaModalLabel">Nuevo Tema</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="numSubTemas">No. Subtemas</label>
                            <input type="number" class="form-control" name="numSubTemas" value="4" id="numSubTemas">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="nombreSubtema">Nombre Subtema 1</label>
                            <input type="text" class="form-control" name="nombreSubtema" id="nombreSubtema">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="nombreSubtema">Nombre Subtema 2</label>
                            <input type="text" class="form-control" name="nombreSubtema" id="nombreSubtema">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="nombreSubtema">Nombre Subtema 3</label>
                            <input type="text" class="form-control" name="nombreSubtema" id="nombreSubtema">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="nombreSubtema">Nombre Subtema 4</label>
                            <input type="text" class="form-control" name="nombreSubtema" id="nombreSubtema">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>
    </form>
@endsection