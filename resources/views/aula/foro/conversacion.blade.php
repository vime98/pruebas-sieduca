@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h1>Tema: Desventajas de las clases online</h1>
              </div>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-6">
                    <h5>Filtrar respuestas</h5>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Todos</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <h5>Seleccionar tema</h5>
                    <select class="custom-select" id="inputGroupSelect01">
                      <option selected>Desventajas de las clases online</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>

            <div class="card-body">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-1">
                      <img src="/imagenes/user01.png" alt="Card image cap" width="50%">
                    </div>
                    <div class="col-4">
                      <div class="row">
                        <div class="col-12">
                          <h4><b>Desventajas de las clases online</b></h4>
                        </div>
                        <div class="col-12">
                          <h4 class="card-title">Jesús Iván Lemus Cervantes</h4>
                        </div>
                      </div>
                    </div>
                  </div>
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
                      <div class="col-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-favorite-outline"></i>
                        <span>12 Likes</span>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-chat"></i>
                        <span>5 Res</span>
                      </div>
                      <div class="col-7">
                        <form>
                          <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                          </p>
                        </form>
                      </div>
                      <div class="col-3">
                        <a href="#">Responder</a>
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
                  <div class="row">
                    <div class="col-1">
                      <img src="/imagenes/user02.png" alt="Card image cap" width="50%">
                    </div>
                    <div class="col-2">
                      <div class="row">
                        <div class="col-12">
                          <h4><b>Respuesta</b></h4>
                        </div>
                        <div class="col-12">
                          <h4 class="card-title">Ernesto Vieyra</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-1">
                      <img src="/imagenes/user01.png" alt="Card image cap" width="50%">
                    </div>
                    <div class="col-4">
                      <div class="row">
                        <div class="col-12">
                          <h4><b>Desventajas de las clases online</b></h4>
                        </div>
                        <div class="col-12">
                          <h4 class="card-title">Jesús Iván Lemus Cervantes</h4>
                        </div>
                      </div>
                    </div>
                  </div>
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
                      <div class="col-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-favorite-outline"></i>
                        <span>1 Likes</span>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-chat"></i>
                        <span>1 Res</span>
                      </div>
                      <div class="col-7">
                        <form>
                          <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                          </p>
                        </form>
                      </div>
                      <div class="col-3">
                        <a href="#">Responder</a>
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
                  <div class="row">
                    <div class="col-1">
                      <img src="/imagenes/user03.png" alt="Card image cap" width="50%">
                    </div>
                    <div class="col-2">
                      <div class="row">
                        <div class="col-12">
                          <h4><b>Respuesta</b></h4>
                        </div>
                        <div class="col-12">
                          <h4 class="card-title">Giovanni Hasid</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-1">
                      <img src="/imagenes/user02.png" alt="Card image cap" width="50%">
                    </div>
                    <div class="col-4">
                      <div class="row">
                        <div class="col-12">
                          <h4><b></b></h4>
                        </div>
                        <div class="col-12">
                          <h4 class="card-title">Ernesto Vieyra</h4>
                        </div>
                      </div>
                    </div>
                  </div>
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
                      <div class="col-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-favorite-outline"></i>
                        <span>0 Likes</span>
                      </div>
                      <div class="col-1">
                        <i class="ion-android-chat"></i>
                        <span>0 Res</span>
                      </div>
                      <div class="col-7">
                        <form>
                          <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                          </p>
                        </form>
                      </div>
                      <div class="col-3">
                        <a href="#">Responder</a>
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
