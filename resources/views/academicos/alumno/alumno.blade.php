@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-3">Perfil del Alumno JUAN CESAR ESPINOSA LAGANA</h3>
                        <div class="card-tools">
                            <a href="{{url('/academicos/alumno/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row container">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded img-thumbnail mx-auto d-block mt-1" alt="Foto del alumno" width="50%" height="50%">
                                <dl class="row mt-3 d-flex justify-content-center align-items-center">
                                    <dt class="col-md-4">Estatus :</dt>
                                    <dd class="col-md-8 mt-2"><button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalEstatus">INSCRITO</button></dd>
                                </dl>
                            </div>
                            <div class="col-md-6 mt-1">
                                <h6>Datos personales</h6>
                                <hr>
                                <dl class="row">
                                    <dt class="col-md-4">Clave :</dt>
                                    <dd class="col-md-8">1819K1</dd>

                                    <dt class="col-md-4">Matricula :</dt>
                                    <dd class="col-md-8"></dd>
                                    
                                    <dt class="col-md-4">Curp :</dt>
                                    <dd class="col-md-8">EILJ840122HMNSGN02</dd>
                                
                                    <dt class="col-md-4">Nombre completo :</dt>
                                    <dd class="col-md-8">JUAN CESAR ESPINOSA LAGANA</dd>

                                    <dt class="col-md-4">Fecha de nacimiento :</dt>
                                    <dd class="col-md-8">22/01/1984</dd>
                                </dl>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <dl class="row">
                                    <dt class="col-md-4">Direccion :</dt>
                                    <dd class="col-md-8">AV OCAMPO</dd>

                                    <dt class="col-md-4">Num :</dt>
                                    <dd class="col-md-8">140</dd>
                                
                                    <dt class="col-md-4">Colonia :</dt>
                                    <dd class="col-md-8">JUAREZ</dd>

                                    <dt class="col-md-4">C. P. :</dt>
                                    <dd class="col-md-8">58010</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl class="row">
                                    <dt class="col-md-3">Telefono :</dt>
                                    <dd class="col-md-9">4433705217</dd>

                                    <dt class="col-md-3">Celular :</dt>
                                    <dd class="col-md-9">8978988888</dd>

                                    <dt class="col-md-3">Correo :</dt>
                                    <dd class="col-md-9">ESPINOSALAGANA@GMAIL.COM</dd>
                                </dl>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <h6>Información territorial</h6>
                                <hr>
                                <dl class="row">
                                    <dt class="col-md-6">Pais de residencia :</dt>
                                    <dd class="col-md-6">MÉXICO</dd>

                                    <dt class="col-md-6">Estado de residencia :</dt>
                                    <dd class="col-md-6">MICHOACAN DE OCAMPO</dd>

                                    <dt class="col-md-6">Municipio de residencia :</dt>
                                    <dd class="col-md-6">ZAMORA</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <h6>Información de sesión</h6>
                                <hr>
                                <dl class="row">
                                    <dt class="col-md-4">Usuario :</dt>
                                    <dd class="col-md-8">ESPINOSALAGANA@GMAIL.COM</dd>
                                </dl>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <h6>Información de escuela procedente</h6>
                                <hr>
                                <dl class="row">
                                    <dt class="col-md-5">Escuela procedente :</dt>
                                    <dd class="col-md-7">UMSNH</dd>

                                    <dt class="col-md-5">Promedio :</dt>
                                    <dd class="col-md-7">9</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <h6>Datos de la escuela inscrito</h6>
                                <hr>
                                <dl class="row">
                                    <dt class="col-md-4">Escuela :</dt>
                                    <dd class="col-md-8">PLANTEL MORELIA</dd>

                                    <dt class="col-md-4">Nivel académico :</dt>
                                    <dd class="col-md-8">MAESTRIA</dd>

                                    <dt class="col-md-4">Modalidad :</dt>
                                    <dd class="col-md-8">MIXTA</dd>

                                    <dt class="col-md-4">Horario :</dt>
                                    <dd class="col-md-8">SABATINO</dd>

                                    <dt class="col-md-4">Retícula :</dt>
                                    <dd class="col-md-8">ACTIVIDAD FISICA</dd>

                                    <dt class="col-md-4">Carrera o grupo :</dt>
                                    <dd class="col-md-8">ACTIVIDAD FISICA MAF-190525-MV1</dd>
                                </dl>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>

                <form action="" method="post">  
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos de facturacion</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="nombre">Nombre :</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" value="" required>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="razonSocial">Razon Social :</label>
                                    <input type="text" class="form-control" id="razonSocial" maxlength="54" value="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="calle">Calle :</label>
                                    <input type="text" class="form-control" id="calle" maxlength="54" value="" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numExterno">No. Externo :</label>
                                    <input type="text" class="form-control" id="numExterno" maxlength="54" value="" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="numInterno">No. Interno :</label>
                                    <input type="text" class="form-control" id="numInterno" maxlength="54" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colonia">Colonia :</label>
                                    <input type="text" class="form-control" id="colonia" maxlength="54" value="" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="cp">Codigo Postal :</label>
                                    <input type="text" class="form-control" id="cp" maxlength="54" value="" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="estado">Estado :</label>
                                    <input type="text" class="form-control" id="estado" maxlength="54" value="" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ciudad">Ciudad o Poblado :</label>
                                    <input type="text" class="form-control" id="ciudad" maxlength="54" value="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="municipio">Delegacion o Municipio :</label>
                                    <input type="text" class="form-control" id="municipio" maxlength="54" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary float-right">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="modal fade" id="modalEstatus" tabindex="-1" role="dialog" aria-labelledby="modalEstatusLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalEstatusLabel">Estado del alumno</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="estatus">Estatus</label>
                        <input type="text" class="form-control" name="estatus" id="estatus" value="INSCRITO" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="movimiento">Movimiento</label>
                            <select class="form-control" name="movimiento" id="movimiento">
                            <option value="0">Error de registro</option>
                            <option value="1">Activo</option>
                            <option value="2" selected="selected">Inscripcion</option>
                            <option value="3" selected="selected">Matriculado</option>																
                            <option value="4" selected="selected">Verano</option>								
                            <option value="6">Baja temporal</option>
                            <option value="7">Baja definitiva</option>
                            <option value="8">Graduado</option>
                            <option value="9">Titulado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fechaMovimiento">Fecha Movimiento</label>
                            <input type="date" class="form-control" name="fechaMovimiento" id="fechaMovimiento">
                        </div>
                    </div>
                    <div class="form-row">
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
@endsection