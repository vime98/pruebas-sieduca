@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h1>Foros</h1>
              </div>
            <div class="card-body">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Creador/</h4>
                  <h4 class="card-title">Nombre del foro/</h4>
                  <h4 class="card-title">Fecha de creación/</h4>
                  <a href="foros/lista-temas">Ver</a>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="">
                    <div class="row">
                      <div class="col-3">
                        <img src="/imagenes/user01.png" alt="Card image cap" width="50%">
                      </div>
                      <div class="col-6">
                        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
                      </div>
                      <div class="col-3">
                        <button type="button" name="button" class="btn btn-primary btn-lg">Seguir</button>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-bulb"></i>
                        <span>2 temas</span>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-favorite-outline"></i>
                        <span>12 likes</span>
                      </div>
                      <div class="col-2">
                        <i class="ion-android-person"></i>
                        <span>5 seguidores</span>
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
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Creador/</h4>
                  <h4 class="card-title">Nombre del foro/</h4>
                  <h4 class="card-title">Fecha de creación/</h4>
                  <a href="foros/lista-temas">Ver</a>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="">
                    <div class="row">
                      <div class="col-3">
                        <img src="/imagenes/user02.png" alt="Card image cap" width="50%">
                      </div>
                      <div class="col-6">
                        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
                      </div>
                      <div class="col-3">
                        <button type="button" name="button" class="btn btn-primary btn-lg">Seguir</button>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-bulb"></i>
                        <span>2 temas</span>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-favorite-outline"></i>
                        <span>12 likes</span>
                      </div>
                      <div class="col-2">
                        <i class="ion-android-person"></i>
                        <span>5 seguidores</span>
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
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Creador/</h4>
                  <h4 class="card-title">Nombre del foro/</h4>
                  <h4 class="card-title">Fecha de creación/</h4>
                  <a href="foros/lista-temas">Ver</a>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="">
                    <div class="row">
                      <div class="col-3">
                        <img src="/imagenes/user01.png" alt="Card image cap" width="50%">
                      </div>
                      <div class="col-6">
                        <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
                      </div>
                      <div class="col-3">
                        <button type="button" name="button" class="btn btn-primary btn-lg">Seguir</button>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-bulb"></i>
                        <span>2 temas</span>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-favorite-outline"></i>
                        <span>12 likes</span>
                      </div>
                      <div class="col-2">
                        <i class="ion-android-person"></i>
                        <span>5 seguidores</span>
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
