<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

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

    /* Todo lo que se mandara almacenar, quedara guardado en request gracias al objeto StoreCurso*/
    public function store(StoreCurso $request){


        /* $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){


        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);


        /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);

    }
}

