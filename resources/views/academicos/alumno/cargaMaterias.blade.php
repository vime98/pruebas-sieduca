@extends('layout.main')

@section('content')
    <div class="container-fluid">
        {{-- Horario y agregar materias --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Horario del alumno</h3>
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
                                        <td>Administracion de base de datos</td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td class="bg-primary"></td>
                                        <td class="bg-primary"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Taller de Sistemas Operativos</td>
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
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAgregarMateria">Agregar Materia</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Calificar --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Calificar</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Materia</th>
                                        <th>Parcial 1</th>
                                        <th>Parcial 2</th>
                                        <th>Parcial 3</th>
                                        <th>Parcial 4</th>
                                        <th>Final</th>
                                        <th>Guardar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Administracion de Base de datos</td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-success"><i class="far fa-save"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Taller de Sistemas Operativos</td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-success"><i class="far fa-save"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Taller de Investigacion</td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="parcial1" id="parcial1" readonly>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-success"><i class="far fa-save"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Extras --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Extras</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Extras</th>
                                        <th>Pendiente 1</th>
                                        <th>Pendiente 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            <div class="alert alert-danger" role="alert">
                                                14 extras cursando. Por lo cual no puede continuar
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Revalidacion --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Revalidaciones</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th>Materia</th>
                                        <th>Grado</th>
                                        <th>Evaluacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">TALLER DE LECTURA Y REDACCION I</td>
                                        <td>1º GRADO</td>
                                        <td>
                                            <div class="form-group col-md-4 float-right">
                                                <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">LENGUA ADICIONAL AL ESPANOL II</td>
                                        <td>2º GRADO</td>
                                        <td>
                                            <div class="form-group col-md-4 float-right">
                                                <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">TEMAS SELECTOS DE QUIMICA</td>
                                        <td>5º GRADO</td>
                                        <td>
                                            <div class="form-group col-md-4 float-right">
                                                <input type="number" class="form-control" name="parcial1" id="parcial1">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="docenteRevalidador">Docente Revalidador</label>
                                    <select class="form-control" name="docenteRevalidador" id="docenteRevalidador">
                                      <option value="0">Selecciona una opcion</option>
                                      <option value="7">JESUS AVILA</option>
                                      <option value="756">ALONDRA AYALA</option>
                                      <option value="759">MARIA GUADALUPE BANDERAS</option>
                                      <option value="761">PAOLA BEDOLLA</option>
                                      <option value="755">SERGIO CORONA</option>
                                      <option value="753">JORGE ALBERTO DURAN</option>
                                      <option value="763">ZENILU GARCIA</option>
                                      <option value="762">ROSA NANCY HERNANDEZ</option>
                                      <option value="758">KARLA JIMENEZ</option>
                                      <option value="760">NELY PACHECO</option>
                                      <option value="757">HECTOR ANTONIO PEREZ</option>
                                      <option value="754">PERLA MARIA ROJAS</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success float-left" data-toggle="modal" data-target="#modalRevalidacion">Por equivalencia</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="modal fade" id="modalAgregarMateria" tabindex="-1" role="dialog" aria-labelledby="modalAgregarMateriaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalAgregarMateriaLabel">Materias disponibles</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Materia 01</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option1">
                                <label class="form-check-label" for="inlineCheckbox2">Materia 02</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
                                <label class="form-check-label" for="inlineCheckbox3">Materia 03</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option1">
                                <label class="form-check-label" for="inlineCheckbox4">Materia 04</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option1">
                                <label class="form-check-label" for="inlineCheckbox5">Materia 05</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option1">
                                <label class="form-check-label" for="inlineCheckbox6">Materia 06</label>
                            </div>
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
        <div class="modal fade" id="modalRevalidacion" tabindex="-1" role="dialog" aria-labelledby="modalRevalidacionLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalRevalidacionLabel">Revalidacion de alumno por equivalencia.</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="grado">Selecciona el Grado</label>
                          <select class="form-control" name="grado" id="grado">
                            <option value="0">Selecciona una opcion</option>
                            <option value="1">1 ° grado</option>
                            <option value="2">2 ° grado</option>
                            <option value="3">3 ° grado</option>
                            <option value="4">4 ° grado</option>
                            <option value="5">5 ° grado</option>
                            <option value="6">6 ° grado</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="docenteRevalidador">Docente Revalidador</label>
                            <select class="form-control" name="docenteRevalidador" id="docenteRevalidador">
                                <option value="0">Selecciona una opcion</option>
                                <option value="7">JESUS AVILA</option>
                                <option value="756">ALONDRA AYALA</option>
                                <option value="759">MARIA GUADALUPE BANDERAS</option>
                                <option value="761">PAOLA BEDOLLA</option>
                                <option value="755">SERGIO CORONA</option>
                                <option value="753">JORGE ALBERTO DURAN</option>
                                <option value="763">ZENILU GARCIA</option>
                                <option value="762">ROSA NANCY HERNANDEZ</option>
                                <option value="758">KARLA JIMENEZ</option>
                                <option value="760">NELY PACHECO</option>
                                <option value="757">HECTOR ANTONIO PEREZ</option>
                                <option value="754">PERLA MARIA ROJAS</option>
                            </select>
                          </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                          <label for="promedio">Ingresa el Promedio</label>
                          <input type="text" class="form-control" name="promedio" id="promedio">
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