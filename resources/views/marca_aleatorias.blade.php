@extends('layouts.app')

@section('title', 'Marcas Celulares')

@section('content')
    <h1 class="mb-4">Marcas de Celulares Orden Aleatorio</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marcas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcaAlea as $marca)
            <tr>
                <td>{{ $marca->marca }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection