@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Balance</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                      <div class="col-7 mx-auto mb-4">
                        <label for="escuelas">Escuelas registradas: </label> 
                        <select name="" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">PLANTEL MORELIA</option>
                            <option value="2">IPROLINE</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <div class="d-flex">
                            <strong>Adeudos:</strong> &nbsp; <p>Carga de pagos a los alumnos.</p>
                        </div>
                        <div class="d-flex">
                        <strong>Pago en efectivo:</strong> &nbsp; <p>Depósitos que realizan los alumnos</p>
                        </div>
                        <div class="d-flex">
                            <strong>Descuentos:</strong> &nbsp; <p>Pagos que no se realizan por becas.</p>
                        </div>
                      </div>
                      
                  </div>
              
                
            <div class="table-responsive mb-3">
              <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center">Adeudos</th>
                      <th class="text-center">Pago en Efectivo</th>
                      <th class="text-center">Descuentos</th>
                      <th class="text-center">Diferencia</th>
                    </tr>
                  </thead>
                  <tr>
                      <td class="text-center">$ 5,267,500.00</td>
                      <td class="text-center">$ 1,681,290.00</td>
                      <td class="text-center">$ 2,880.00</td>
                      <td class="text-center">$ 3,583,330.00</td>


                    </tr>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">
                Footer
              </div> -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>

<div class="modal fade" id="modal_carga_depositos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Cargar Depósitos de un Archivo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <label for="archivo">Seleccione el archivo a subir</label>
        <input type="file" name="" id="" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
        <br>    
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="agregararticulo">Aceptar</button>
      </div>
    </div>
  </div>
</div>

      <script src="{{asset('js/home.js')}}"></script>
@endsection