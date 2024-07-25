@extends('layouts.app')

@section('title', 'Saldo Unefon')

@section('content')
    <h1 class="mb-4">Saldo Unefon</h1>
    <div class="alert alert-info">
        La suma del saldo de Unefon es: <strong>{{ $sumaSaldos }}</strong>
    </div>
@endsection