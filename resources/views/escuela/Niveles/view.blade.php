@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Informacion Nivel</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <a href="{{url("/Escuela/Niveles")}}" type="button" class="btn btn-warning" title="Nuevo" >Regresar&nbsp;&nbsp;&nbsp;<i class="fas fa-undo"></i></a>
                    <button type="button" class="btn btn-primary" title="Nuevo" >Guardar&nbsp;&nbsp;&nbsp;<i class="fas fa-save"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="justify-content-between align-items-center row">
                    <div class="col-md-6 mx-auto">
                      <label for="Nombre">{{'Nombre del Nivel*'}}</label>
                      <input type="text" name="Nombre" id="Nombre" class="form-control input-sm" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,40}"
                      value="" required>
                    </div>
                    <div class="col-md-6 mx-auto">
                        <label for="Institucion">{{'Institucion*'}}</label>
                        <select id="Institucion"  class="form-control" name="Institucion" autofocus>
                            <option value="Michoacan">Michoacan</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="justify-content-between align-items-center row">
                    <div class="col-md-6 mx-auto">
                        <label for="Horario">{{'Horario manejado*'}}</label>
                        <select id="Horario"  class="form-control" name="Horario" autofocus>
                          <option value="MATUTINO">Matutino</option>
                          <option value="VESPERTINO">Vespertino</option>
                          <option value="SABATINO">Sabatino</option>
                          <option value="ESPECIAL">Especial</option>
                        </select>
                    </div>
                    <div class="col-md-6 mx-auto">
                        <label for="Modalidad">{{'Modalidad'}}</label>
                        <select id="Modalidad"  class="form-control" name="Modalidad" autofocus>
                          <option value="ESCOLARIZADA">Escolarizada</option>
                          <option value="MIXTA">Mixta</option>
                          <option value="VIRTUAL">Virtual</option>
                        </select>
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
