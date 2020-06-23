@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Consultar Adeudos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped">
                                <thead>
                                    <tr>
                                        <th>Adeudos</th>
                                        <th>Monto</th>
                                        <th>Día</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">INSCRIPCION. Nota: PERIODO May - Agos</td>
                                        <td>$ 2800</td>
                                        <td>2019-05-27</td>
                                        <td><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-secondary m-1"><i class="fas fa-check-circle"></i> Generar ficha de pago total</button>
                                <button type="button" class="btn btn-secondary m-1"><i class="fas fa-check-circle"></i> Generar ficha de pago mensual</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAdeudo">Agregar Adeudo</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Consultar depósitos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped">
                                <thead>
                                    <tr>
                                        <th>Descripcion</th>
                                        <th>Monto</th>
                                        <th>Día</th>
                                        <th>Movimientos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">
                                            Folio: 072. <br>
                                            Movimiento :1. <br>
                                            Pago: EFECTIVO . <br>
                                            Descripcion: INSCRIPCION SEPTIEMBRE DICIEMBRE 19. <br>
                                        </td>
                                        <td>$ 2800</td>
                                        <td>2019-08-27</td>
                                        <td>
                                            <button type="button" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></button>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                            <button type="button" class="btn btn-secondary m-1"><i class="far fa-file"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            Folio: 072. <br>
                                            Movimiento :1. <br>
                                            Pago: EFECTIVO . <br>
                                            Descripcion: INSCRIPCION SEPTIEMBRE DICIEMBRE 19. <br>
                                        </td>
                                        <td>$ 2800</td>
                                        <td>2019-08-27</td>
                                        <td>
                                            <button type="button" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></button>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                            <button type="button" class="btn btn-secondary m-1"><i class="far fa-file"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">
                                            Folio: 072. <br>
                                            Movimiento :1. <br>
                                            Pago: EFECTIVO . <br>
                                            Descripcion: INSCRIPCION SEPTIEMBRE DICIEMBRE 19. <br>
                                        </td>
                                        <td>$ 2800</td>
                                        <td>2019-08-27</td>
                                        <td>
                                            <button type="button" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></button>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                            <button type="button" class="btn btn-secondary m-1"><i class="far fa-file"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalDeposito">Agregar depósito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="" method="post">
        <div class="modal fade" id="modalAdeudo" tabindex="-1" role="dialog" aria-labelledby="modalAdeudoLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalAdeudoLabel">Agregar adeudo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-7">
                          <label for="adeudo">Cargar Adeudo</label>
                          <select class="form-control" name="adeudo" id="adeudo">
                                <option value="0">Selecciona una opcion</option>							
                                <option value="32">INSCRIPCION</option>
                                <option value="33">COLEGIATURA</option>                     
                          </select>
                        </div>
                        <div class="form-group col-md-12">
                          <label for="descripcion">Descripcion</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
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
        <div class="modal fade" id="modalDeposito" tabindex="-1" role="dialog" aria-labelledby="modalDepositoLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalDepositoLabel">Agregar depósito</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                          <label for="qr">QR</label>
                          <input type="text" class="form-control" name="qr" id="qr">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="folio">Folio</label>
                            <input type="text" class="form-control" name="folio" id="folio">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="deposito">Depósito</label>
                          <input type="text" class="form-control" name="deposito" id="deposito">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="movimiento">Movimiento</label>
                            <input type="text" class="form-control" name="movimiento" id="movimiento">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="diaDepositado">Dia Depositado</label>
                            <input type="date" class="form-control" name="diaDepositado" id="diaDepositado">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="tipoPago">Tipo de Pago</label>
                          <select class="form-control" name="tipoPago" id="tipoPago">                 
                            <option value="0">EFECTIVO</option>
                            <option value="1">TARJETA</option>
                            <option value="2">CHEQUE</option>
                            <option value="3">TRANSFERENCIA</option>
                            <option value="4">DEPOSITO</option>
                          </select>
                        </div>
                        <div class="form-group col-md-8">
                          <label for="descripcion">Descripcion</label>
                          <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
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