@extends('layouts.app')

@section('title', 'Saldo Nextel')

@section('content')
    <h1 class="mb-4">Saldo Nextel</h1>
    <div class="alert alert-info">
        La suma del saldo de Nextel es: <strong>{{ $sumaSaldos }}</strong>
    </div>
@endsection