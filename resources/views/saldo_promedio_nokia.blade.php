@extends('layouts.app')

@section('title', 'Saldo Promedio Nokia')

@section('content')
    <h1 class="mb-4">Saldo Promedio Nokia</h1>
    <div class="alert alert-info">
        <strong>Saldo Promedio:</strong> {{ $usuarios }}
    </div>
@endsection