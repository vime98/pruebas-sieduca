@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <form action="" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos Personales</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="matricula">Matricula</label>
                                    <input type="text" class="form-control" id="matricula" maxlength="30" required>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="curp">Curp</label>
                                    <input type="text" class="form-control" id="curp" maxlength="30" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="apellidoPaterno">Apellido paterno</label>
                                    <input type="text" class="form-control" id="apellidoPaterno" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="apellidoMaterno">Apellido materno</label>
                                    <input type="text" class="form-control" id="apellidoMaterno" maxlength="54" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="fechaNacimiento" required>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" id="foto">
                                    <small id="foto" class="form-text text-muted">Opcional</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="numero">Num</label>
                                    <input type="text" class="form-control" id="numero" size="5" maxlength="19" required>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="colonia">Colonia</label>
                                    <input type="text" class="form-control" id="colonia" maxlength="34" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="codigoPostal">C. P.</label>
                                    <input type="text" class="form-control" id="codigoPostal" size="5" maxlength="5" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" maxlength="10" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" id="celular" maxlength="10" required>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información territorial</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="pais">País de residencia</label>
                                    <select id="pais" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                        <option>ESTADOS UNIDOS</option>
                                        <option>MÉXICO</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estado">Estado de residencia</label>
                                    <select id="estado" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="municipio">Municipio de residencia</label>
                                    <select id="municipio" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información de contacto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" maxlength="49" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" maxlength="49" required>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos de la escuela inscrito</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="escuelaProcedente">Escuela procedente</label>
                                    <input type="text" class="form-control" id="escuelaProcedente" maxlength="54" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="promedio">Promedio</label>
                                    <input type="text" class="form-control" id="promedio" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="escuela">Escuela</label>
                                    <select id="escuela" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nivelAcademico">Nivel académico</label>
                                    <select id="nivelAcademico" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="reticula">Retícula</label>
                                    <select id="reticula" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="carrera">Carrera o grupo</label>
                                    <select id="carrera" class="form-control" required>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                </div>
            </div>
        </form>        
    </div>
@endsection