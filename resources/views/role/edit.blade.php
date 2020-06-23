@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Modificar rol</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="role-form">
                <div class="card-body">
                    <input type="hidden" id="id" name="id" value="{{ $role->id }}" />
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" value="{{ $role->name }}" id="name" name="name" placeholder="Nombre" autofocus />
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
