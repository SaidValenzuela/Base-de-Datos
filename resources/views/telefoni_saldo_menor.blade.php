@extends('layouts.app')

@section('title', 'Números de Teléfono')

@section('content')
    <h1 class="mb-4">Números de Teléfono con Saldo Menor o Igual a 300</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Teléfono</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->saldo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection