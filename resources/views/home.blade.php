@extends('layouts.plantilla')

@section('title', 'Home')


@section('content')

<h1>Bienvenido a la pagina principal</h1>
<a href="{{ route('cursos.index') }}">Ir a base de administracion</a>

@endsection
