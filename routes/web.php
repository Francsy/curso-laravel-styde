<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/notas', function () {
    return view('notes');
});

Route::get('/notas/crear', function () {
    return view('add-note');
});

//Parámetro dinámico / dynamic parameters

Route::get('/notas/{id}/editar', function ($id) {
    return 'Editar nota: '. $id;
});

//Esta ruta debe ir la última para no tener precedencia sobre notas/crear
// Las rutas de parámetros dinámicos deben ir debajo de las de parámetros estáticos

Route::get('/notas/{id}', function ($id) {
    return "Detalle de la nota: {$id}"; // con comillas dobles se interpretan las variables dentro de la cadena
})->whereNumber('id'); // para asegurar solo numeros
// ->where('id', '\d+') // con esta expresion regular solucionaríamos el problema de preferencia de la ruta dinámica al recibir solo números

/* Parámetro de consulta / query parameters
Route::get('/notas/editar', function () {
    return 'Editar nota: ? ' . $_GET['id']  ;
});
*/ 

// Dificultad Random:
Route::get('/cursos', function () {
    return [
        'cursos'=> [
            ['curso' => 'PHP', 'dificultad' => rand(1, 10)],
            ['curso' => 'Laravel', 'dificultad' => rand(1, 10)],
            ['curso' => 'JS', 'dificultad' => rand(1, 10)]
        ]
    ];
});