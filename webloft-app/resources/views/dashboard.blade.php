@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h4>Meus Imóveis</h4>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-imoveis-container">
        @if(count($imoveis) > 0)
        @else
            <p>Nenhum imóvel encontrado, <a href="/imoveis/cadastrar">cadastrar</a></p>
        @endif
    </div>

@endsection