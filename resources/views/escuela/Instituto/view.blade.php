@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Informacion Instituto</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                    <a href="{{url("/Escuela/Instituto")}}" type="button" class="btn btn-warning" title="Nuevo" >Regresar&nbsp;&nbsp;&nbsp;<i class="fas fa-undo"></i></a>
                    <button type="button" class="btn btn-primary" title="Nuevo" >Guardar&nbsp;&nbsp;&nbsp;<i class="fas fa-save"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="justify-content-between align-items-center row">
                  <div class="col-md-6 mx-auto">
                      <label for="Nombre">{{'Nombre*'}}</label>
                      <input type="text" name="Nombre" id="Nombre" class="form-control input-sm" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,40}"
                      value="" required disabled>
                      @if ($errors->has('Nombre'))
                          <span class="text-danger">{{ $errors->first('Nombre') }}</span>
                      @elseif($errors->has('Direccion'))
                      <span class="text-danger"></span>
                      @endif
                  </div>
                  <div class="col-md-6 mx-auto">
                      <label for="Direccion">{{'Direccion*'}}</label>
                      <input type="text" name="Direccion" id="Direccion" class="form-control @error('Direccion') is-invalid @enderror input-sm" pattern="[a-z0-9A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð #,.'-]{3,100}"
                      value="{{ old('Direccion') }}" required disabled>
                      @if ($errors->has('Direccion'))
                          <span class="text-danger">{{ $errors->first('Direccion') }}</span>
                      @elseif($errors->has('Nombre'))
                      <span class="text-danger"></span>
                      @endif
                  </div>
              </div>
              <br>
              <div class="justify-content-between align-items-center row">
                  <div class="col-md-6 mx-auto">
                      <label for="Colonia">{{'Colonia*'}}</label>
                      <input type="text" name="Colonia" id="Colonia" class="form-control @error('Colonia') is-invalid @enderror input-sm" pattern="[a-z0-9A-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð #,.'-]{3,100}"
                      value="{{ old('Colonia') }}" required disabled>
                      @if ($errors->has('Colonia'))
                          <span class="text-danger">{{ $errors->first('Colonia') }}</span>
                      @elseif($errors->has('Num'))
                      <span class="text-danger"></span>
                      @elseif($errors->has('CP'))
                      <span class="text-danger"></span>
                      @endif
                  </div>
                  <div class="col-md-3 mx-auto">
                    <label for="Num">{{'Num*'}}</label>
                    <input type="text" name="Num" id="Num" class="form-control @error('Num') is-invalid @enderror input-sm" pattern="[0-9]{1,3}"
                    value="{{ old('Num') }}" required disabled>
                    @if ($errors->has('Num'))
                        <span class="text-danger">{{ $errors->first('Num') }}</span>
                    @elseif($errors->has('Colonia'))
                    <span class="text-danger"></span>
                    @elseif($errors->has('CP'))
                    <span class="text-danger"></span>
                    @endif
                </div>
                <div class="col-md-3 mx-auto">
                  <label for="CP">{{'CP*'}}</label>
                  <input type="text" name="CP" id="CP" class="form-control @error('CP') is-invalid @enderror input-sm" pattern="[0-9]{1,3}"
                  value="{{ old('CP') }}" required disabled>
                  @if ($errors->has('CP'))
                      <span class="text-danger">{{ $errors->first('CP') }}</span>
                  @elseif($errors->has('Colonia'))
                  <span class="text-danger"></span>
                  @elseif($errors->has('Num'))
                    <span class="text-danger"></span>
                    @endif
              </div>
              </div>
              <br>
              <div class="justify-content-between align-items-center row">
                <div class="col-md-4 mx-auto">
                    <label for="Pais">{{'Pais'}}</label>
                    <select id="Pais"  class="form-control" name="Pais" autofocus disabled>
                        <option value="Mexico">Mexico</option>
                    </select>
                </div>
                <div class="col-md-4 mx-auto">
                    <label for="Estado">{{'Estado'}}</label>
                    <select id="Estado"  class="form-control" name="Estado" autofocus disabled>
                        <option value="Michoacan">Michoacan</option>
                    </select>
                </div>
                <div class="col-md-4 mx-auto">
                  <label for="Municipio">{{'Municipio'}}</label>
                  <select id="Municipio"  class="form-control" name="Municipio" autofocus disabled>
                      <option value="Morelia">Morelia</option>
                  </select>
              </div>
            </div>
            <br>
            <div class="justify-content-between align-items-center row">
              <div class="col-md-5 mx-auto">
                <center><label for="Telefono">{{'Teléfono'}}</label></center>
                <input type="text" name="Telefono" id="Telefono" class="form-control input-sm" pattern="[0-9]{7,10}" autocomplete="off"
                value="{{ old('Telefono')}}" disabled>
              </div>
              <div class="col-md-5 mx-auto">
                <center><label for="Correo">{{'Correo'}}</label></center>
                <input type="text" name="Correo" id="Correo" class="form-control input-sm" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" autocomplete="off"
                value="{{ old('Correo')}}" disabled>
              </div>
              <div class="col-md-2 mx-auto">
                <label for="Horario">{{'Horario'}}</label>
                <select id="Horario"  class="form-control" name="Horario" autofocus disabled>
                    <option value="MATUTINO">Matutino</option>
                    <option value="VESPERTINO">Vespertino</option>
                    <option value="SABATINO">Sabatino</option>
                    <option value="ESPECIAL">Especial</option>
                </select>
            </div>
            </div>
            <br>
            <div class="justify-content-between align-items-center row">
              <center><div class="col-md-12 mx-auto">
                <label for="logo">Agregar Logo</label>
                <div class="file-upload-wrapper">
                  <input type="file" id="logo" class="file-upload" accept="image/*" data-default-file="https://mdbootstrap.com/img/Photos/Others/images/89.jpg" disabled/>
                </div>
              </div>
            </div>
            <br>
            <label> Niveles academicos</label>
            <div class="justify-content-between align-items-center row">
              <div class="col-md-6 mx-auto">
                <div class="col-md-6 mx-auto">
                  <label> Registro</label>
                  <br>
                  <label for="NombreAcademico">{{'Nombre nivel Academico*'}}</label>
                  <input type="text" name="NombreAcademico" id="NombreAcademico" class="form-control input-sm" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,40}"
                  value="" required>
                </div>
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
                <br>
                <div class="col-md-6 mx-auto">
                  <center><button type="button" class="btn btn-warning" title="Nuevo" >Registrar&nbsp;&nbsp;&nbsp;<i class="fas fa-save"></i></button>
                </div>
              </div>
              <div class="col-md-6 mx-auto">
                <div class="col-md-6 mx-auto">
                  <label> Niveles</label>
                  <br>
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
