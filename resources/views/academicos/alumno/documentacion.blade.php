@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Documentación</div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-10 col-md-9">
                            <h6>Kardex</h6>
                        </div>
                        <div class="col-lg-2 col-md-3 text-center">
                            <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-10 col-md-9">
                            <h6>Historial Academico</h6>
                        </div>
                        <div class="col-lg-2 col-md-3 text-center">
                            <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-10 col-md-9">
                            <h6>Constancia de Estudios</h6>
                        </div>
                        <div class="col-lg-2 col-md-3 text-center">
                            <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-lg-10 col-md-9">
                            <h6>Carta de Buena Conducta</h6>
                        </div>
                        <div class="col-lg-2 col-md-3 text-center">
                            <button type="button" class="btn btn-success">Descargar &nbsp;<i class="far fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Boleta de calificaciones</div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="form-group col-md-5">
                            <label for="grado">Grados Disponibles</label>
                            <select class="form-control" name="grado" id="grado">
                              <option value="0">Selecciona una opcion</option>
                            </select>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-2 text-center mt-3">
                            <button type="button" class="btn btn-secondary">Buscar &nbsp;<i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Consultar beca</div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="form-group col-md-5">
                            <label for="becas">Becas disponibles</label>
                            <select class="form-control" name="becas" id="becas">
                              <option value="0">Selecciona una opcion</option>
                            </select>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-2 text-center mt-3">
                            <button type="button" class="btn btn-secondary">Buscar &nbsp;<i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection