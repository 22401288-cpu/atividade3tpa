@extends('layouts.app')

@section('title', 'Eventos — FalaQ')

@section('navbar_item')
    @auth
        <a href="{{ route('eventos.create') }}"> Criar Evento </a>
    @endauth
@endsection

@section('content')
<div class="row g-0">
    <div class="col-md-12 mb-4">
        <h2 class="fw-bold">📅 Eventos Ativos</h2>
        <p class="text-muted">Escolha um evento para acompanhar as perguntas e participar da conversa.</p>
        @auth
            <a href="{{ route('eventos.create') }}"> Criar Evento </a>
        @endauth
    </div>

    @foreach ($eventos as $evento)
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h4 class="card-title fw-bold text-white">{{ $evento->titulo }}</h4>
                <p class="card-text text-secondary">{{ $evento->descricao }}</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="badge bg-purple" style="background:#7c6af7;">
                        {{ $evento->perguntas->count() }} perguntas
                    </span>
                    <a href="{{ route('eventos.show', $evento->id) }}" class="btn btn-primary btn-sm">
                        Entrar no Evento &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
