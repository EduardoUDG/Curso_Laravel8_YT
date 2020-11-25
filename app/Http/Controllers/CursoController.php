<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        /* llamamos modelo "Curso", en la varible cursos tenemos almacenado
        todos los cursos de la bd*/
        $cursos = Curso::all();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', compact('curso'));
    }
}

