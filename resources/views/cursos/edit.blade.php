@extends('layouts.plantilla')

@section('title', 'Cursos edit')


@section('content')

    <h1>En esta seccion podrás editar un curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>

        <label for="">
            Description
            <br>
            <textarea name="descripcion" cols="30" rows="10" value="">{{ $curso->descripcion }}</textarea>
        </label>
        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
