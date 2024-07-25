@extends('layouts.app')

@section('title', 'Saldo Máximo de Mujeres')

@section('content')
    <h1 class="mb-4">Saldo Máximo de Mujeres</h1>
    <div class="alert alert-info">
        El saldo máximo de las mujeres es: <strong>{{ $saldoMaximo }}</strong>
    </div>
@endsection