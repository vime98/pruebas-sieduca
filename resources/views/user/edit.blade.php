@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificar usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="user-form">
                <div class="card-body">
                    <input type="hidden" id="id" name="id" value="{{ $user->id }}" />
                    <div class="form-group">
                        <label for="username">Nombre</label>
                        <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Nombre" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="username">Nombre de usuario</label>
                        <input type="text" class="form-control" value="{{ $user->username }}" id="username" name="username" placeholder="Nombre de usuario" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Nombre de usuario" />
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
<script src="{{ asset('js/user/form.js') }}"></script>
@endsection
