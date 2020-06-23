@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nombre del foro</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="col-12">
                  <button type="button" name="button" class="btn btn-primary btn-lg">Agregar nuevo tema</button>
                </div>
                <br>
              <table class="table table-head-fixed text-nowrap" id="table-users">
                  <thead>
                    <tr>
                      <th>Tema</th>
                      <th>Comunicado por</th>
                      <th>Réplicas</th>
                      <th>Último mensaje</th>
                    </tr>
                    <tr>
                      <td><a href="tema">Tecnológia en la educación</a></td>
                      <td>
                        <div class="">
                          <img src="/imagenes/user01.png" alt="Card image cap" width="40">
                          Jesús Iván Lemus Cervantes
                        </div>
                      </td>
                      <td><a href="tema/conversacion">25</a></td>
                      <td>martes, 26 de mayo 2020. a las 20:20</td>
                    </tr><tr>
                      <td><a href="tema">Educación a distancia</a></td>
                      <td>
                        <div class="">
                          <img src="/imagenes/user03.png" alt="Card image cap" width="40">
                          Ernesto Vieyra
                        </div>
                      </td>
                      <td><a href="tema/conversacion">10</a></td>
                      <td>martes, 26 de mayo 2020. a las 22:00</td>
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
            <!-- /.card -->
          </div>
        </div>
      </div>
      <script src="js/home.js"></script>
@endsection
