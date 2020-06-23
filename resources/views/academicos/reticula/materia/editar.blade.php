@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <form action="" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Actualizar materia</div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" value="FUNDAMENTOS ESTADISTICOS" required>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="grado">Grado</label>
                                    <select id="grado" class="form-control" required>
                                        <option>Selecciona una opcion</option>
                                        <option value="1" selected>Primer grado</option>
                                        <option value="2">Segundo grado</option>
                                        <option value="3">Tercer grado</option>
                                        <option value="4">Cuarto grado</option>
                                        <option value="5">Quinto grado</option>
                                        <option value="6">Sexto grado</option>
                                        <option value="7">Septimo grado</option>
                                        <option value="8">Octavo grado</option>
                                        <option value="9">Noveno grado</option>
                                        <option value="10">Decimo grado</option>	
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="creditos">Créditos</label>
                                    <input type="text" class="form-control" id="creditos" maxlength="3" value="8" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-7">
                                    <label for="nombre">Actividades</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="154" value="TEORICO PRACTICAS" required>
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