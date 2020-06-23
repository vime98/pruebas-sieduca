
@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 pb-5 pt-5">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo rol</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="role-form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" autofocus />
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="btn-submit-role" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/role/form.js') }}"></script>
@endsection
