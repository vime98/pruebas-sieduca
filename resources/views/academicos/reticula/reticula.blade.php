@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-3">Datos generales de la retícula</h3>
                        <div class="card-tools">
                            <a href="{{url('/academicos/reticula/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row container">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <dl class="row">
                                    <dt class="col-md-5">Nombre :</dt>
                                    <dd class="col-md-7">INGENIERIA EN PROCESOS </dd>

                                    <dt class="col-md-5">Nivel académico :</dt>
                                    <dd class="col-md-7">LICENCIATURA</dd>
                                    
                                    <dt class="col-md-5">Horario :</dt>
                                    <dd class="col-md-7">SABATINO</dd>
                                
                                    <dt class="col-md-5">RVOE:</dt>
                                    <dd class="col-md-7">LIC121100</dd>
                                </dl>
                            </div>
                            <div class="col-md-5">
                                <dl class="row">
                                    <dt class="col-md-5">Escuela :</dt>
                                    <dd class="col-md-7">IPROLINE</dd>

                                    <dt class="col-md-5">Modalidad :</dt>
                                    <dd class="col-md-7">MIXTA</dd>
                                    
                                    <dt class="col-md-5">Descripción :</dt>
                                    <dd class="col-md-7">MANUFACTURA</dd>
                                
                                    <dt class="col-md-5">Centro de trabajo :</dt>
                                    <dd class="col-md-7">CT67867868</dd>
                                </dl>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Materias</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row table-responsive">
                            <table class="table table-head-fixed table-striped" id="table-materias">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Grado</th>
                                        <th>Créditos</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FUNDAMENTOS ESTADISTICOS</td>
                                        <td>1º grado.</td>
                                        <td>8 puntos.</td>
                                        <td>
                                            <a href="{{url('/academicos/reticula/materia')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/reticula/materia/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FUNDAMENTOS ESTADISTICOS</td>
                                        <td>1º grado.</td>
                                        <td>8 puntos.</td>
                                        <td>
                                            <a href="{{url('/academicos/reticula/materia')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/reticula/materia/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FUNDAMENTOS ESTADISTICOS</td>
                                        <td>1º grado.</td>
                                        <td>8 puntos.</td>
                                        <td>
                                            <a href="{{url('/academicos/reticula/materia')}}" class="btn btn-info m-1"><i class="fa fa-search-plus"></i></a>
                                            <a href="{{url('/academicos/reticula/materia/editar')}}" class="btn btn-warning m-1"><i class="fa fa-pen" style="color: white"></i></a>
                                            <button type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('/academicos/reticula/materia/agregar')}}" class="btn btn-primary float-right">Agregar Materia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection