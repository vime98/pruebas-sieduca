@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Becas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                  
                <div class="mb-3">
                    <button class="btn btn-success" data-toggle="modal" data-target="#modal_beca">Agregar Beca</button>    
                </div>
                <div class="row mb-5">
                    <div class="col-6 mx-auto text-center">
                    <label for="escuelas">Escuelas registradas: </label> 
                        <select name="" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">PLANTEL MORELIA</option>
                            <option value="2">IPROLINE</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive mb-3">
              <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th class="text-center">Matrícula</th>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Beca</th>
                      <th class="text-center">Porcentaje</th>
                      <th class="text-center">Datos Académicos</th>
                    </tr>
                  </thead>
                  <tr>
                      <td class="text-center">17120122</td>
                      <td class="text-center">ALEIDI JANETTE CAMPOS</td>
                      <td class="text-center">CONVENIO</td>
                      <td class="text-center">20 %</td>
                      <td class="text-center">LICENCIATURA - ADMINISTRACIÓN</td>
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

<div class="modal fade" id="modal_beca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Agregar Nueva Beca</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <label for="escuela">Nombre de la Escuela:</label>
        <select name="" id="" class="form-control input-sm">
                            <option value="0" selected disabled>Selecciona una opción</option>
                            <option value="1">PLANTEL MORELIA</option>
                            <option value="2">IPROLINE</option>
                        </select>
        <br>
        <label for="escuelas">Nivel Académico: </label>
                        <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">LICENCIATURA</option>
                        <option value="2">MAESTRIA</option>
                        <option value="2">DOCTORADO</option>
                    </select>
        <br>
        <label for="escuelas">Carrera: </label> 
                    <select name="" id="" class="form-control input-sm">
                      <option value="0" selected disabled>Selecciona una opción</option>
                      <option value="1">EDUCACIÓN</option>
                      <option value="2">GERONTOLOGÍA</option>
                      <option value="2">BIG DATA</option>
                    </select>
        <br>
                    <label for="alumno">Nombre del alumno</label> 
                      <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">Jesús Lemus</option>
                        <option value="2">Ernesto Vieyra</option>
                        <option value="3">Hasid Resendiz</option>
                        <option value="4">Carlos Castro</option>
                      </select>
        <br>
        <div class="row justify-content-between">

            <div class="col-8">
            <label for="alumno">Tipo de Beca:</label> 
                      <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">INSTITUCIONAL</option>
                        <option value="2">STASPE</option>
                        <option value="3">SERVICIO SOCIAL</option>
                      </select>
            </div>            
            <div class="col-4">
                <label for="porcentaje">Porcentaje:</label>
                <input type="number" class="form-control input-sm">
            </div>
        </div>
        
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