@extends('layouts.app')

@section('title', 'Saldo Telcel')

@section('content')
    <h1 class="mb-4">Saldo Telcel</h1>
    <div class="alert alert-info">
        La suma del saldo de Telcel es: <strong>{{ $sumaSaldos }}</strong>
    </div>
@endsection