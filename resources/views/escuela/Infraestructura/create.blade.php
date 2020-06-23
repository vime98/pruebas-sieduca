@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nueva Infraestructura</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <a href="{{url("/Escuela/Infraestructura")}}" type="button" class="btn btn-warning" title="Nuevo" >Regresar&nbsp;&nbsp;&nbsp;<i class="fas fa-undo"></i></a>
                    <button type="button" class="btn btn-primary" title="Nuevo" >Guardar&nbsp;&nbsp;&nbsp;<i class="fas fa-save"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="card-body">
                  <div class="justify-content-between align-items-center row">
                      <div class="col-md-6 mx-auto">
                          <label for="Escuela">{{'Escuela*'}}</label>
                          <select id="Escuela"  class="form-control" name="Escuela" autofocus>
                              <option value="Michoacan">Michoacan</option>
                          </select>
                      </div>
                      <div class="col-md-6 mx-auto">
                        <label for="Nombre">{{'Nombre*'}}</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control input-sm" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,40}"
                        value="" required>
                      </div>
                  </div>
                  <br>
                  <div class="justify-content-between align-items-center row">
                    <div class="col-md-10 mx-auto">
                      <label for="Descripcion">{{'Descripcion*'}}</label>
                      <input type="text" name="Descripcion" id="Descripcion" class="form-control input-sm" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,40}"
                      value="" required>
                    </div>
                    <div class="col-md-2 mx-auto">
                      <label for="Aulas_Check">{{'¿Agregar Aulas?'}}</label>
                      <select id="Aulas_Check"  class="form-control" name="Aulas_Check" autofocus>
                          <option value="NO">No</option>
                          <option value="SI">Si</option>
                      </select>
                    </div>
                  </div>
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
      <script src="js/home.js"></script>
@endsection
