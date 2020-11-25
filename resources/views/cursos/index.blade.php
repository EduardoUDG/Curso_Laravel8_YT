@extends('layouts.plantilla')

@section('title', 'Cursos index')


@section('content')

<h1>Bienvenido a la pagina cursos</h1>

<a href="{{ route('cursos.create') }}">Crear curso</a>

<ul>
    @foreach ($cursos as $curso)
        <li>
            <a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->name }} </a>
        </li>
    @endforeach
</ul>

{{--  Llamamos la coleccion cursos y le pasamos el metodo links  --}}
{{ $cursos->links() }}

@endsection
