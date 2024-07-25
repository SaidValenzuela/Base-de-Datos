@extends('layouts.app')

@section('title', 'Compañias Telefonicas')

@section('content')
    <h1 class="mb-4">Compañias Telefónicas en Orden Aleatorio</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Compañia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compAlea as $compania)
            <tr>
                <td>{{ $compania->compañia }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection