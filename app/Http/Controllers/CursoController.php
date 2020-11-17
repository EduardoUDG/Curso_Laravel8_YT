<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a cursos";
    }

    public function create(){
        return "En esta seccion se crean cursos";
    }

    public function show($curso){
        return 'Bienvenido al curso ' . $curso;
    }
}
