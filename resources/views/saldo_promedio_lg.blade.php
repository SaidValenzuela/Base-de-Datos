@extends('layouts.app')

@section('title', 'Saldo Promedio LG')

@section('content')
    <h1 class="mb-4">Saldo Promedio LG</h1>
    <div class="alert alert-info">
        <strong>Saldo Promedio:</strong> {{ $usuarios }}
    </div>
@endsection