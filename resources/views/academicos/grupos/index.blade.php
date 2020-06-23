@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">GRUPOS</div>
                    </div>
                    <div class="card-body">
                        
                        <div class="row d-flex justify-content-center align-items-center pb-3">
                            <div class="form-group col-md-5">
                                <label for="escuela">Escuela</label>
                                <select class="form-control" id="escuela">
                                  <option>Selecciona una opcion</option>
                                  <option>PLANTEL MORELIA</option>
                                  <option>IPROLINE</option>
                                </select>
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-2 text-center mt-3">
                                <button type="button" class="btn btn-secondary">Buscar &nbsp;<i class="fas fa-search"></i></button>
                            </div>
                        </div>

                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped" id="table-estudiantes">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Escuela</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ACTIVIDAD FISICA MAF-190525-MV1. <br>
                                            ACTIVIDAD FISICA<br>
                                            PERIODO Ene - Jun<br>
                                            CICLO 2018-2019<br>
                                            ESTADO Cursando<br></td>
                                        <td>
                                            PLANTEL MORELIA. <br>
                                            MAESTRIA.<br>
                                            MIXTA.<br>
                                            Horario: SABATINO<br>
                                        </td>
                                        <td>
                                            <a href="{{url('/academicos/grupo')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/grupo/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('/academicos/grupo/agregar')}}" class="btn btn-primary float-right">Agregar Grupo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection