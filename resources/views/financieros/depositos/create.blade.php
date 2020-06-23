@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Agregar Nuevo Depósito</h3>
              </div>
              <div class="card-body">
                <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 mx-auto">
                <form action="" method="POST">
                    {{ csrf_field() }} 
                    <div class="row">
                    <div class="col-12">
                        <h3 class="mb-4">Datos Generales</h3>
                    </div>
                    <div class="col-6 mb-4 ">
                        <label for="escuelas">Escuela: </label> 
                        <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">PLANTEL MORELIA</option>
                        <option value="2">IPROLINE</option>
                    </select>
                    </div>
                    <br><br><br>
                    <div class="col-6 mb-4 ">
                    <label for="escuelas">Nivel Académico: </label>
                        <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">LICENCIATURA</option>
                        <option value="2">MAESTRIA</option>
                        <option value="2">DOCTORADO</option>
                    </select>
                    </div>
                    <div class="col-6 mb-5 ">
                    <label for="escuelas">Carrera: </label> 
                    <select name="" id="" class="form-control input-sm">
                      <option value="0" selected disabled>Selecciona una opción</option>
                      <option value="1">EDUCACIÓN</option>
                      <option value="2">GERONTOLOGÍA</option>
                      <option value="2">BIG DATA</option>
                    </select>
                    </div>
                    
                    <div class="col-6 mb-5 ">
                    <label for="escuelas">Periodo Escolar</label> 
                      <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">2018-2019 Periodo Ene-Jun</option>
                      </select>
                    </div>
                    <div class="col-12">
                        <h3 class="mb-4">Datos del Alumno</h3>
                    </div>
                    <div class="col-12 mb-5">
                    <label for="alumno">Nombre del alumno</label> 
                      <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">Jesús Lemus</option>
                        <option value="2">Ernesto Vieyra</option>
                        <option value="3">Hasid Resendiz</option>
                        <option value="4">Carlos Castro</option>
                      </select>
                    </div>

                    <div class="col-12">
                        <h3 class="mb-4">Movimiento</h3>
                    </div>

                    <div class="col-6 mb-4">
                    <label for="alumno">Tipo de Pago:</label> 
                      <select name="" id="" class="form-control input-sm">
                        <option value="0" selected disabled>Selecciona una opción</option>
                        <option value="1">Inscripción</option>
                        <option value="2">Colegiatura</option>
                        <option value="3">Reinscripción</option>
                      </select>
                    </div>

                    <div class="col-6 mb-4">
                    <label for="cantidad">Cantidad:</label> 
                    <input type="number" class="form-control input-sm">
                    </div>


                    </div>
                    <div class="modal-footer">
                        <a href="../depositos" class="btn btn-default">Cancelar</a>        
                        <input type="submit" value="Agregar" class="btn btn-primary">
                    </div>
                </form>
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

      <script src="{{asset('js/home.js')}}"></script>
@endsection