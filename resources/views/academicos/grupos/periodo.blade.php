@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Asignaturas</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Docente</th>
                                        <th>Materia</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-outline-dark m-1" data-toggle="modal" data-target="#modalDocente">JAIRO VERELA</button>
                                        </td>
                                        <td>
                                            ESTRUCTURA Y FUNCION DEL CUERPO HUMANO. <br>
                                            1º grado
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary m-1" data-toggle="modal" data-target="#modalCalificar"><i class="fas fa-pencil-ruler" style="color: white"></i></button>
                                            <button type="button" class="btn btn-warning m-1" data-toggle="modal" data-target="#modalComentar"><i class="far fa-comment" style="color: white"></i></button>
                                            <button type="button" class="btn btn-success m-1">Lista &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                                            <button type="button" class="btn btn-success m-1">C.C &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalRegistrarAsignatura">Registrar asignatura</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Horario</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>MATERIA</th>
                                        <th>LUNES</th>
                                        <th>MARTES</th>
                                        <th>MIERCOLES</th>
                                        <th>JUEVES</th>
                                        <th>VIERNES</th>
                                        <th>SABADO</th>
                                        <th>DOMINGO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            ESTRUCTURA Y FUNCION DEL CUERPO HUMANO. <br>
                                            1 º grado.<br>
                                            DOCENTE: JAIRO VARELA .<br>
                                        </td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td class="bg-primary"></td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            LOS NUTRIENTES EN LA DIE4TA DEL DEPORTISTA. <br>
                                            1 º grado. <br>
                                            DOCENTE: JAIRO VARELA. <br> 
                                        </td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="modal fade" id="modalCalificar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDocenteLabel">Calificar ESTRUCTURA Y FUNCION DEL CUERPO HUMANO. 1º grado.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Alumno</th>
                                        <th>Parcial 1</th>
                                        <th>Parcial 2</th>
                                        <th>Parcial 3</th>
                                        <th>Final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">ALVARADO PASTOR BRENDA ALEXANDRA</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="5" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="5" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="5" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="5" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">CAMPOS MORENO NESTOR VICENTE</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9.6" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9.6" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9.8" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="10" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">ESPINOSA LAGANA JUAN CESAR</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9.2" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9.6" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9.4" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" class="form-control" value="9" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

    <form action="" method="post">
        <div class="modal fade" id="modalComentar" tabindex="-1" role="dialog" aria-labelledby="modalComentarLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalComentarLabel">Comentar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        Docente: JAIRO VARELA GARCIA. <br> Materia: ESTRUCTURA Y FUNCION DEL CUERPO HUMANO. <br> 1º grado.
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            BIENVENIDOS <br>
                            2019-07-19 13:19:50 <br>	
                            C. E.: JESUS AVILA GALINDO
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label for="comentario">Comentario</label>
                          <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
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

    <form action="" method="post">
        <div class="modal fade" id="modalDocente" tabindex="-1" role="dialog" aria-labelledby="modalDocenteLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalDocenteLabel">Docente</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-10">
                          <label for="docentes">Docentes</label>
                          <select class="form-control" name="docentes" id="docentes" required>
                            <option value="0">Selecciona una opcion</option>
                            <option value="785">SSWDFFFRFRR. CHRISTIAN GEOVANNI BONILLA CARBAJAL</option>
                            <option value="783">45581188144S. FRANSISCO JAVIER CORTES ALIPIO</option>
                            <option value="789">DDDEFGFRFGTGG. ELVIA HIGERA PEREZ</option>
                            <option value="788">DDEKEJUEDUHDH. RAUL LARA DDDEED</option>
                            <option value="787">JDJJDJJDJDJDJ. JOS MAR MERCADO</option>
                            <option value="786">EFFFRFFFRFRRR. GERARDO ANDR P HERRERA</option>
                            <option value="784">JJD455845141D. NORA ANGELICA RODRIGUEZ VALDEZ</option>
                            <option value="782" selected>8767868767867. JAIRO VARELA GARCIA</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <button type="button" class="btn btn-danger m-1">Quitar <i class="far fa-times-circle"></i></button>
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

    <form action="" method="post">
        <div class="modal fade" id="modalRegistrarAsignatura" tabindex="-1" role="dialog" aria-labelledby="modalRegistrarAsignaturaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalRegistrarAsignaturaLabel">Registrar asignatura</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-10">
                          <label for="docentes">Docentes</label>
                          <select class="form-control" name="docentes" id="docentes" required>
                            <option value="0">Selecciona una opcion</option>
                            <option value="785">SSWDFFFRFRR. CHRISTIAN GEOVANNI BONILLA CARBAJAL</option>
                            <option value="783">45581188144S. FRANSISCO JAVIER CORTES ALIPIO</option>
                            <option value="789">DDDEFGFRFGTGG. ELVIA HIGERA PEREZ</option>
                            <option value="788">DDEKEJUEDUHDH. RAUL LARA DDDEED</option>
                            <option value="787">JDJJDJJDJDJDJ. JOS MAR MERCADO</option>
                            <option value="786">EFFFRFFFRFRRR. GERARDO ANDR P HERRERA</option>
                            <option value="784">JJD455845141D. NORA ANGELICA RODRIGUEZ VALDEZ</option>
                            <option value="782">8767868767867. JAIRO VARELA GARCIA</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="grados">Grados</label>
                          <select class="form-control" name="grados" id="grados" required>
                            <option value="0">Selecciona una opcion</option>
                            <option value="1">1º grado.</option>
                            <option value="2">2º grado.</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="materias">Materias</label>
                            <select class="form-control" name="materias" id="materias" required>
                              <option value="0">Selecciona una opcion</option>
                            </select>
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