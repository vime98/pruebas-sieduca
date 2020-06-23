
@extends('layout.main-nosidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 pb-5 pt-5">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cree su usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="user-form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="username">Nombre de usuario</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Nombre de usuario" />
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="current-password" />
                    </div>
                    <div class="form-group">
                        <label for="password">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Contraseña" autocomplete="current-password" />
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="btn-submit-user" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/user/guest-form.js') }}"></script>
@endsection
