@extends('layouts.app')

@section('title', 'Marcas de Celular en Orden Descendente')

@section('content')
    <h1 class="md-4">Marcas de Celular en Orden Descendente</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marcasDesc as $marca)
            <tr>
                <td>{{ $marca->marca }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>