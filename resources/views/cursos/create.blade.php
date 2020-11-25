@extends('layouts.plantilla')

@section('title', 'Cursos create')


@section('content')

    <h1>En esta seccion se crearan cursos</h1>
    <a href="{{ route('cursos.index') }}">Regresar</a>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>



        <label for="">
            Description
            <br>
            <textarea name="descripcion" cols="30" rows="10">{{ old('descripcion') }}</textarea>
        </label>
        @error('descripcion')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>



        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        @error('categoria')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
