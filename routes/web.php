<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/home', function(){
    return view('home');
});

//Rutas Módulo Roles
Route::get('role', 'Api\Core\RoleController@index');
Route::get('role/create', 'Api\Core\RoleController@create');
Route::get('role/edit/{id}', 'Api\Core\RoleController@editRole');

//Rutas Módulo Usuario
Route::get('user', 'Api\Core\UserController@index');
Route::get('user/create', 'Api\Core\UserController@create');
Route::get('user/edit/{id}', 'Api\Core\UserController@editUser');
Route::get('user/roles/{id}', 'Api\Core\UserController@rolesUser');

Route::get('role', 'Api\Core\RoleController@index');
Route::get('role/create', 'Api\Core\RoleController@create');
Route::get('role/edit/{id}', 'Api\Core\RoleController@editRole');

/* Rutas Modulo Academicos */
/* Alumnos */
Route::get('/academicos/alumnos', function(){
    return view('academicos.alumno.index');
});
Route::get('/academicos/alumno/agregar', function(){
    return view('academicos.alumno.agregar');
});
Route::get('/academicos/alumno/editar', function(){
    return view('academicos.alumno.editar');
});
Route::get('/academicos/alumno', function(){
    return view('academicos.alumno.alumno');
});
Route::get('/academicos/alumno/carga-materias', function(){
    return view('academicos.alumno.cargaMaterias');
});
Route::get('/academicos/alumno/adeudos-depositos', function(){
    return view('academicos.alumno.finanzas');
});
Route::get('/academicos/alumno/documentacion', function(){
    return view('academicos.alumno.documentacion');
});
/* Grupos */
Route::get('/academicos/grupos', function(){
    return view('academicos.grupos.index');
});
Route::get('/academicos/grupo/agregar', function(){
    return view('academicos.grupos.agregar');
});
Route::get('/academicos/grupo/editar', function(){
    return view('academicos.grupos.editar');
});
Route::get('/academicos/grupo', function(){
    return view('academicos.grupos.grupo');
});
Route::get('/academicos/grupo/periodo', function(){
    return view('academicos.grupos.periodo');
});
/* Reticulas */
Route::get('/academicos/reticulas', function(){
    return view('academicos.reticula.index');
});
Route::get('/academicos/reticula/agregar', function(){
    return view('academicos.reticula.agregar');
});
Route::get('/academicos/reticula', function(){
    return view('academicos.reticula.reticula');
});
Route::get('/academicos/reticula/editar', function(){
    return view('academicos.reticula.editar');
});
Route::get('/academicos/reticula/materia/agregar', function(){
    return view('academicos.reticula.materia.agregar');
});
Route::get('/academicos/reticula/materia/editar', function(){
    return view('academicos.reticula.materia.editar');
});
Route::get('/academicos/reticula/materia', function(){
    return view('academicos.reticula.materia.materia');
});
/* Reportes */
Route::get('/academicos/reportes', function(){
    return view('academicos.reportes.indexReportes');
});


//Rutas Escuela
Route::get('/Escuela/Infraestructura', function(){
    return view('escuela.Infraestructura.index');
});
Route::get('/Escuela/Infraestructura-new', function(){
    return view('escuela.Infraestructura.create');
});
Route::get('/Escuela/Infraestructura-ver', function(){
    return view('escuela.Infraestructura.view');
});
Route::get('/Escuela/Instituto', function(){
    return view('escuela.Instituto.index');
});
Route::get('/Escuela/Instituto-new', function(){
    return view('escuela.Instituto.create');
});
Route::get('/Escuela/Instituto-ver', function(){
    return view('escuela.Instituto.view');
});
Route::get('/Escuela/Niveles', function(){
    return view('escuela.Niveles.index');
});
Route::get('/Escuela/Niveles-new', function(){
    return view('escuela.Niveles.create');
});
Route::get('/Escuela/Niveles-ver', function(){
    return view('escuela.Niveles.view');
});

//Rutas Financieros
Route::get('financieros/depositos', function(){
    return view('financieros.depositos.index');
});
Route::get('financieros/depositos/create', function(){
    return view('financieros.depositos.create');
});
Route::get('financieros/balance', function(){
    return view('financieros.balance');
});
Route::get('financieros/becas', function(){
    return view('financieros.becas');
});
Route::get('financieros/pagos', function(){
    return view('financieros.pagos.index');
});
Route::get('financieros/pagos/create', function(){
    return view('financieros.pagos.create');
});
Route::get('financieros/pagos/show', function(){
    return view('financieros.pagos.show');
});

Route::get('aula/curso/presentacion', function(){
    return view('aula/curso/presentacion-curso');
});
Route::get('aula/curso/modulo', function(){
    return view('aula/curso/modulo-curso');
});
Route::get('aula/foros', function(){
    return view('aula/foro/foros');
});
Route::get('aula/foros/lista-temas', function(){
    return view('aula/foro/lista-temas');
});
Route::get('aula/foros/tema/conversacion', function(){
    return view('aula/foro/conversacion');
});
Route::get('aula/foros/tema', function(){
    return view('aula/foro/tema');
});
Route::get('aula/lista-cursos', function(){
    return view('aula/curso/lista-cursos');
});
Route::get('aula/curso/personas', function(){
    return view('aula/curso/personas');
});
