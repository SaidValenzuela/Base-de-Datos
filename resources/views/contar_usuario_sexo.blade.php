@extends('layouts.app')

@section('title', 'Usuario por Sexo')

@section('content')
    <h1 class="mb-4">Contar Usuario por Sexo</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Sexo</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->sexo }}</td>
                <td>{{ $usuario->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection