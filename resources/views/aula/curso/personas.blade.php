@extends('layout.main')

@section('content')
    <div class="container-fluid">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="presentacion">Presentacion</a></li>
                <li class="breadcrumb-item"><a href="modulo">Modulo 1</a></li>
                <li class="breadcrumb-item"><a href="modulo">Modulo 2</a></li>
                <li class="breadcrumb-item">Personas</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3>Personas</h3>
              </div>
              <div class="card-body">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Docentes</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="col-12">
                      <button type="button" name="button" class="btn btn-primary btn-lg">Invitar a docentes</button>
                    </div>
                    <br>
                  <table class="table table-head-fixed text-nowrap" id="table-users">
                      <thead>
                        <tr>
                          <th>Nombre de usuario</th>
                          <th>E-mail</th>
                          <th>Accion</th>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-2">
                                <img src="/imagenes/user02.png" alt="Card image cap" width="40">
                              </div>
                              <div class="col-10">
                                Jesús Iván Lemus Cervantes
                              </div>
                            </div>
                          </td>
                          <td>thejesus567@gmail.com</td>
                          <td></td>
                        </tr>
                      </thead>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <!-- <div class="card-footer">
                    Footer
                  </div> -->
                  <!-- /.card-footer-->
                </div>
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Alumnos</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="col-12">
                      <button type="button" name="button" class="btn btn-primary btn-lg">Invitar a alumnos</button>
                    </div>
                    <br>
                  <table class="table table-head-fixed text-nowrap" id="table-users">
                      <thead>
                        <tr>
                          <th>Nombre de usuario</th>
                          <th>E-mail</th>
                          <th>Accion</th>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-2">
                                <img src="/imagenes/user01.png" alt="Card image cap" width="40">
                              </div>
                              <div class="col-10">
                                Ernesto Vieyra
                              </div>
                            </div>
                          </td>
                          <td>Ernestopo@gmail.com</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="row">
                              <div class="col-2">
                                <img src="/imagenes/user03.png" alt="Card image cap" width="40">
                              </div>
                              <div class="col-10">
                                Giovanni Hasid
                              </div>
                            </div>
                          </td>
                          <td>Hasid@gmail.com</td>
                          <td></td>
                        </tr>
                      </thead>
                      </tbody>
                    </table>
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
