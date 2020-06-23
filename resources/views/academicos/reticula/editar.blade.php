@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <form action="" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Actualizar retícula</div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" value="INGENIERIA EN PROCESOS" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="escuela">Escuela</label>
                                    <select id="escuela" class="form-control" required>
                                        <option value="0">Selecciona una opcion</option>
                                        <option value="1">PLANTEL MORELIA</option>
                                        <option value="3" selected>IPROLINE</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nivelAcademico">Nivel académico</label>
                                    <select id="nivelAcademico" class="form-control" required>
								        <option value="0">Selecciona una opcion</option>
                                        <option selected="selected" value="9">LICENCIATURA. MIXTA. SABATINO</option>
                                        <option value="10">MAESTRIA. VESPERTINO</option>
                                        <option value="11">DOCTORADO. MATUTINO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="rvoe">RVOE</label>
                                    <input type="text" class="form-control" id="rvoe" maxlength="25" value="LIC121100" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="centroTrabajo">Centro de trabajo</label>
                                    <input type="text" class="form-control" id="centroTrabajo" maxlength="25" value="CT67867868" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="descripcion">Descripción </label>
                                    <textarea class="form-control" id="descripcion" rows="3" maxlength="154" required>MANUFACTURA</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12">
                    <button type="button" class="btn btn-warning float-right">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection