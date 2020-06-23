@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ALUMNO</h3>
                        {{-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove"><i class="fas fa-times"></i></button>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center pb-3">
                            <div class="form-group col-md-3">
                                <label for="escuela">Escuela</label>
                                <select class="form-control" id="escuela">
                                  <option>Selecciona una opcion</option>
                                  <option>PLANTEL MORELIA</option>
                                  <option>IPROLINE</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nivel">Nivel</label>
                                <select class="form-control" id="nivel">
                                    <option>Selecciona una opcion</option>
                                    <option>LICENCIATURA. MIXTA. SABATINO. INGENIERIA EN PROCESOS. LICIP03062023</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="estatus">Estatus</label>
                                <select class="form-control" id="estatus">
                                  <option>Selecciona una opcion</option>
                                  <option>Activo</option>
                                  <option>Inscrito</option>
                                  <option>Matriculado</option>
                                  <option>Verano</option>
                                  <option>Baja temporal</option>
                                  <option>truncado</option>
                                  <option>Graduado</option>
                                  <option>Titulado</option>
                                  <option>Error de registro</option>
                                </select>
                            </div>
                            <div class="col-md-2 text-center mt-3">
                                <button type="button" class="btn btn-secondary">Buscar &nbsp;<i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        {{-- <div class="row d-flex justify-content-center align-items-center">
                            <div class="form-group col-10">
                                <label for="busqueda">Buscar</label>
                                <input type="text" class="form-control" id="busqueda" aria-describedby="buscarpor" placeholder="Buscar por nombre, matricula o curp">
                            </div>
                            <div class="col-2 text-center">
                                <button type="button" class="btn btn-secondary mt-3"><i class="fas fa-search"></i></button>
                            </div>
                        </div> --}}
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped" id="table-estudiantes">
                                <thead>
                                    <tr>
                                        <th>Clave</th>
                                        <th>Nombre</th>
                                        <th>Escuela</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded img-thumbnail d-block" alt="Foto del alumno" width="50px" height="50px">
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>1819K1</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>JUAN CESAR ESPINOSA LAGANA.</td>
                                        <td>PLANTEL MORELIA.</td>
                                        <td>
                                            <a href="{{url('/academicos/alumno')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/alumno/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                            <a href="{{url('/academicos/alumno/carga-materias')}}" class="btn btn-secondary m-1"><i class="far fa-clipboard"></i></a>
                                            <a href="{{url('/academicos/alumno/adeudos-depositos')}}" class="btn btn-success m-1"><i class="fas fa-dollar-sign"></i></a>
                                            <a href="{{url('/academicos/alumno/documentacion')}}" class="btn btn-primary m-1"><i class="far fa-folder-open"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('/academicos/alumno/agregar')}}" class="btn btn-primary float-right">Agregar Alumno</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection