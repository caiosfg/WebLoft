@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h4>Meus Imóveis</h4>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-imoveis-container">
        @if(count($imoveis) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Compradores</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            @foreach($imoveis as $imovel)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/imoveis/{{ $imovel->id}}">{{ $imovel->nome}}</a></td>
                    <td>0</td>
                    <td><a href="#">Editar</a> <a href="#">Deletar</a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
        @else
            <p>Nenhum imóvel encontrado, <a href="/imoveis/cadastrar">cadastrar</a></p>
        @endif
    </div>

@endsection