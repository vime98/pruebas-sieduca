@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Información del pago</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="col-10 mx-auto row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5 class="font-weight-bold mb-3">Escuela: <small>PLANTEL MORELIA</small></h5>
                        <h5 class="font-weight-bold mb-3">Modalidad: <small>MIXTA</small></h5>
                        <h5 class="font-weight-bold mb-3">Reticula: <small>ADMINISTRACIÓN</small></h5>
                        <h5 class="font-weight-bold mb-3">Nivel académico: <small>LICENCIATURA</small></h5>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <h5 class="font-weight-bold mb-3">Nombre del pago: <small>COLEGIATURA</small></h5>
                        <h5 class="font-weight-bold mb-3">Monto: <small>2500.00 $ MN.</small></h5>
                        <h5 class="font-weight-bold mb-3">Horario: <small>SABATINO</small></h5>
                        <h5 class="font-weight-bold mb-3">Carrera o grupo: <small>ADMIN 1920</small></h5>                        
                    </div>
                    <button class="btn btn-warning">Editar Información</button>
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