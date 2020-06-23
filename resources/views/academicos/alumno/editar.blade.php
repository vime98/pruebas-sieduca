@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos Personales</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" class="img-fluid rounded img-thumbnail mx-auto d-block mt-1" alt="Foto del alumno" width="20%" height="20%">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control-file" id="foto">
                                    <small id="foto" class="form-text text-muted">Opcional</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Clave</label>
                                    <input type="text" class="form-control" value="1819K1" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Matricula</label>
                                    <input type="text" class="form-control" value="" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Curp</label>
                                    <input type="text" class="form-control" value="EILJ840122HMNSGN02" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" maxlength="54" value="JUAN CESAR" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="apellidoPaterno">Apellido paterno</label>
                                    <input type="text" class="form-control" id="apellidoPaterno" maxlength="54" value="ESPINOSA" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="apellidoMaterno">Apellido materno</label>
                                    <input type="text" class="form-control" id="apellidoMaterno" maxlength="54" value="LAGANA" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="fechaNacimiento" value="1984-01-22" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" maxlength="54" value="AV OCAMPO" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="numero">Num</label>
                                    <input type="text" class="form-control" id="numero" size="5" maxlength="19" value="140" required>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="colonia">Colonia</label>
                                    <input type="text" class="form-control" id="colonia" maxlength="34" value="JUAREZ" required>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="codigoPostal">C. P.</label>
                                    <input type="text" class="form-control" id="codigoPostal" size="5" maxlength="5" value="58010" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" maxlength="10" value="4433705217" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" id="celular" maxlength="10" value="8978988888" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cambio de Matricula</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="matricula">Matricula</label>
                                    <input type="text" class="form-control" id="matricula" maxlength="30" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
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
                                        <option>Selecciona una opcion</option>
                                        <option>ESTADOS UNIDOS</option>
                                        <option selected>MÉXICO</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estado">Estado de residencia</label>
                                    <select id="estado" class="form-control" required>
                                        <option >Selecciona una opcion</option>
                                        <option selected>MICHOACAN DE OCAMPO</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="municipio">Municipio de residencia</label>
                                    <select id="municipio" class="form-control" required>
                                        <option>Selecciona una opcion</option>
                                        <option selected>ZAMORA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información de contacto</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" maxlength="54" value="ESPINOSALAGANA@GMAIL.COM" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información de sesion</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" value="ESPINOSALAGANA@GMAIL.COM" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" id="password" maxlength="49" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información de escuela procedente</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="escuelaProcedente">Escuela procedente</label>
                                    <input type="text" class="form-control" id="escuelaProcedente" maxlength="54" value="UMSNH" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="promedio">Promedio</label>
                                    <input type="text" class="form-control" id="promedio" maxlength="10" value="9" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Datos de la escuela inscrito</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="escuela">Escuela</label>
                                    <select id="escuela" class="form-control" required>
                                        <option>Selecciona una opcion</option>
                                        <option selected>PLANTEL MORELIA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="carrera">Carrera o grupo</label>
                                    <select id="carrera" class="form-control" required>
                                        <option>Selecciona una opcion</option>
                                        <option selected>MAESTRIA. MIXTA. SABATINO. ACTIVIDAD FISICA. ACTIVIDAD FISICA MAF-190525-MV1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-warning float-right">Guardar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection