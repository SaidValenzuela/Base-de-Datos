@extends('layouts.app')

@section('title', 'Listado de Nombres de Usuarios')

@section('content')
<h1 class="mb-4">Listado de Nombres de Usuarios</h1>
<ul class="list-group">
    @foreach ($usuarios as $usuario)
    <li class="list-group-item">{{ $usuario->nombre }}</li>
    @endforeach
</ul>
@endsection