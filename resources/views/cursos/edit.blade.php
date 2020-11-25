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
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        <br>
        @error('name')
            <small>*{{ $message }}</small>
        @enderror
        <br>



        <label for="">
            Description
            <br>
            <textarea name="descripcion" cols="30" rows="10">{{ old('descripcion',$curso->descripcion) }}</textarea>
        </label>
        <br>
        @error('descripcion')
            <small>*{{ $message }}</small>
        @enderror
        <br>



        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        <br>
        @error('categoria')
            <small>*{{ $message }}</small>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
