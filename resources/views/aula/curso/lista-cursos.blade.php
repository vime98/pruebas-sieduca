@extends('layout.main')

@section('content')
<!-- Navbar con opcones de navegacion -->

<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Cursos</h2>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="/imagenes/checklist.png" alt="Card image cap" height="400em">
            <div class="card-body">
              <div class="row">
                <div class="col-10">
                  <h2><a href="curso/presentacion">Nombre del Curso</a></h2>
                </div>
                <div class="col-2">
                  <img src="/imagenes/user01.png" alt="Card image cap" width="100%">
                </div>
              </div>

              <p class="card-text"><small class="text-muted">Nombre del profesor</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="/imagenes/institution.png" alt="Card image cap" height="400em">
            <div class="card-body">
              <div class="row">
                <div class="col-10">
                  <h2><a href="curso/presentacion">Nombre del Curso</a></h2>
                </div>
                <div class="col-2">
                  <img src="/imagenes/user02.png" alt="Card image cap" width="100%">
                </div>
              </div>

              <p class="card-text"><small class="text-muted">Nombre del profesor</small></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="/imagenes/flat-book.png" alt="Card image cap" height="400em">
            <div class="card-body">
              <div class="row">
                <div class="col-10">
                  <h2><a href="curso/presentacion">Nombre del Curso</a></h2>
                </div>
                <div class="col-2">
                  <img src="/imagenes/user03.png" alt="Card image cap" width="100%">
                </div>
              </div>

              <p class="card-text"><small class="text-muted">Nombre del profesor</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src="js/home.js"></script>
@endsection
