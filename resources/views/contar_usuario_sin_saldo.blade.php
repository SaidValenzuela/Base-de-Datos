@extends('layouts.app')

@section('title', 'Usuarios sin Saldo o Inactivos')

@section('content')
    <h1 class="mb-4">Usuarios sin Saldo o Inactivos</h1>
    <div class="alert alert-info">
        El número de usuarios sin saldp o inactivo es: <strong>{{ $usuariosCount }}</strong>
    </div>
@endsection