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


Route::get('ubicacion', function() {
    return "Ubicacion";
});


Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
    if ($categoria){
        return 'Bienvenido al curso: ' . $curso . ' de la categoria, ' . $categoria ;
    }
    else {
        return 'Bienvenido al curso: ' . $curso;
    }
});

