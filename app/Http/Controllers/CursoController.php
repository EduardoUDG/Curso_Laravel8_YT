<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        /* llamamos modelo "Curso", en la varible cursos tenemos almacenado
        todos los cursos de la bd*/
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    /* Todo lo que se mandara almacenar, quedara guardado en request */
    public function store(Request $request){

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){


        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();
        return redirect()->route('cursos.show', $curso);

    }
}

