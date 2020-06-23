@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">REPORTES ACADÉMICOS</div>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-9">
                                <h6>Reporte de estatus del alumnado (baja temporal, activos, inscritos, matriculados, egresados y titulados)</h6>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-9">
                                <h6>Reporte de porcentaje en becas</h6>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-9">
                                <h6>Reporte de alumnos por genero</h6>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-9">
                                <h6>Reporte financiero de alumnos</h6>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-9">
                                <h6>Reporte de alumnos dados de baja</h6>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                        <hr>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10 col-md-9">
                                <h6>Reporte de alumnos sin CURP o sin Matricula</h6>
                            </div>
                            <div class="col-lg-2 col-md-3 text-center">
                                <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection