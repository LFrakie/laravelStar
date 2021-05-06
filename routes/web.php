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
    return view('welcome');
});

// // // // // // // ruta simple -- ejemplo 1
// Route::get('/estudiante', function () {
//     return view('estudiante.index');
// });

// Route::get('/estudiante/create', function () {
//     return view('estudiante.crear');
// });


// // // // // // // ruta simple -- ejemplo 2
/*
Route::get('/asignaturas', 'App\Http\Controllers\AsignaturaController@index');
Route::get('/asignaturas/create', 'App\Http\Controllers\AsignaturaController@create');
*/

// // // // // // // ruta simple -- ejemplo 3

Route::resource('asignaturas', 'App\Http\Controllers\AsignaturaController');

Route::resource('estudiantes', 'App\Http\Controllers\EstudianteController');

