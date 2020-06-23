@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Depósitos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="row mb-4 mt-1">
                <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 row">
                    <!-- Select escuela -->
                    <div class="col-xs-6 col-sm-6 col-md-2 col-lg-3 mb-3">
                        <label for="escuelas">Escuela: </label> 
                        <select name="" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">PLANTEL MORELIA</option>
                            <option value="2">IPROLINE</option>
                        </select>
                    </div>
                    <!-- Select Modalidad -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-3">
                            <label for="escuelas">Nivel Académico: </label> 
                        <select name="" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">LICENCIATURA</option>
                            <option value="2">MAESTRIA</option>
                            <option value="2">DOCTORADO</option>
                        </select>
                    </div>
                    <!-- Select escuela -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-3">
                            <label for="escuelas">Carrera: </label> 
                        <select name="" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">EDUCACIÓN</option>
                            <option value="2">GERONTOLOGÍA</option>
                            <option value="2">BIG DATA</option>
                        </select>
                    </div>
                    <!-- Select escuela -->
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-3">
                            <label for="escuelas">Periodo Escolar</label> 
                        <select name"" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">2018-2019 Periodo Ene-Jun</option>
                        </select>
                    </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 mx-auto align-items-center row">
                    <i class="fas fa-search fa-2x"></i>

                    </div>
                </div>
                
            <div class="table-responsive">
                <h3 class="mb-3">Tabla de depósitos</h3>
                <div class="mb-3">
                    <a href="depositos/create" class="btn btn-success" >Nuevo Depósito</a> 
                    &nbsp;   
                    <button class="btn btn-info" data-toggle="modal" data-target="#modal_carga_depositos">Cargar Depósitos</button>    
                </div>
              <table class="table table-head-fixed text-nowrap" id="table-users">
                  <thead>
                    <tr>
                      <th class="text-center">Fecha</th>
                      <th class="text-center">Folio</th>
                      <th class="text-center">Matrícula</th>
                      <th class="text-center">Monto</th>
                      <th class="text-center">Movimiento</th>
                      <th class="text-center">Descripcion</th>
                      <th class="text-center">Consultar</th>
                      <th class="text-center">Acciones</th>
                    </tr>
                  </thead>
                  <tr>
                      <td class="text-center">2020-06-10</td>
                      <td class="text-center">20715</td>
                      <td class="text-center">17120188</td>
                      <td class="text-center">$1200.00</td>
                      <td class="text-center">IEIEI8J</td>
                      <td class="text-center">INSCRIPCION PERIODO MAYO AGOSTO 2018</td>
                      <td class="text-center"><button class="btn btn-light"><li class="fas fa-eye"></li></button></td>
                      <td class="text-center">
                          <button class="btn btn-warning"><li class="fas fa-edit"></li></button>
                          <button class="btn btn-danger"><li class="fas fa-trash"></li></button>
                      </td>

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