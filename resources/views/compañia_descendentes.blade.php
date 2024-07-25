@extends('layouts.app')

@section('title', 'Compañias en Orden Descendente')

@section('content')
    <h1 class="md-4">Compañias en Orden Descendente</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Compañia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compDesc as $compañia)
            <tr>
                <td>{{ $compañia->compañia }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>