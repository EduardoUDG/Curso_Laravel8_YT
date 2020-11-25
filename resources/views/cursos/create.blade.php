@extends('layouts.plantilla')

@section('title', 'Cursos create')


@section('content')

    <h1>En esta seccion se crearan cursos</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label for="">
            Description
            <br>
            <textarea name="descripcion" cols="30" rows="10"></textarea>
        </label>
        <br>

        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
