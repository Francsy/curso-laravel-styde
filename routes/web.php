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
    return 'Listado de notas';
});

Route::get('/notas/crear', function () {
    return 'Crear nueva nota';
});

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