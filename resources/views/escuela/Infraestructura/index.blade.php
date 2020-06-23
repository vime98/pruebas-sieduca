@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Infraestructura</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                    <a href="{{url("/Escuela/Infraestructura-new")}}" type="button" class="btn btn-success" title="Nuevo" >Agregar&nbsp;&nbsp;&nbsp;<i class="fas fa-folder-plus"></i></a>
                </div>
              </div>
              <div class="card-body">
              <table class="table table-head-fixed text-nowrap" id="table-planteles">
                  <thead>
                    <tr>
                      <th>Edificio</th>
                      <th>Descripcion</th>
                      <th>Escuela Parteneciente</th>
                      <th>Aulas</th>
                      <th>Accion</th>
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
