@extends('layouts.app')

@section('title', 'Compañias en Orden Ascendente')

@section('content')
    <h1 class="md-4">Compañias en Orden Ascendente</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Compañia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($compAsc as $compañia)
            <tr>
                <td>{{ $compañia->compañia }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>