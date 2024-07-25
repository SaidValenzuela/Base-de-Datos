@extends('layouts.app')

@section('title', 'Saldo Minimo Hombres')

@section('content')
    <h1 class="mb-4">Saldo Minimo Hombres</h1>
    <div class="alert alert-info">
        El saldo minimo de los hombres es: <strong>{{ $saldoMinimo }}</strong>
    </div>
@endsection