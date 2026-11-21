@extends('layouts.app')

@section('title', 'Criar Evento — FalaQ')

@section('content')
<div class="row">
    <!-- Formulário de cadastro de evento -->
    <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3">
            <h4 class="fw-bold mb-3">💬 Faça sua Pergunta</h4>
            <form action="{{ route('eventos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label text-secondary">Titulo do Evento</label>

                    <input type="text" name="titulo" id="titulo"
                           class="form-control bg-dark text-white border-secondary">

                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label text-secondary">Descrição do Evento</label>

                    <input type="text" name="descricao" id="descricao"
                           class="form-control bg-dark text-white border-secondary">

       
                </div>
                <div class="mb-3">
                    <label for="data_evento" class="form-label text-secondary">Data</label>

                    <input type="date" name="data_evento" id="data_evento"
                           class="form-control bg-dark text-white border-secondary">

                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Criar Evento</button>
            </form>
        </div>
    </div>
@endsection