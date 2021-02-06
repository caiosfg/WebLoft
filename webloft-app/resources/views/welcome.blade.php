@extends('layouts.main')

@section('title', 'Web Loft')

@section('content')

        <div id="search-container" class="col-md-12">
            <h4>Busque o que deseja</h4>
                <form action="">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Buscar....">
                </form>
            <button id="busca-imovel-btn" class="btn btn-primary" type="submit">Search</button>
        </div>

        <div id="imoveis-container" class="col-md-12">
           <h4>Em Destaque</h4>

           {{-- Esta parte varre a listagem da Home --}}

           <div id="cards-container" class="row">
                @foreach($imoveis as $imovel)
                    <div class="card col-md-3">
                        <img src="/img/imoveis/{{ $imovel->imagem }}" alt="{{ $imovel->nome }}">
                        <div class="card-body">
                            <p class="card-date">03-02-2021</p>
                            <h6 class="card-title">{{ $imovel->nome }} {{ $imovel->metragem }} m2</h6>
                            <p class="card-bairro">{{ $imovel->bairro }} </p>
                            <p class="card-descricao">{{  substr($imovel->descricao, 0, 100) }} {{ (strlen($imovel->descricao) > 100) ? '...' : '' }} </p>
                            <a href="/imoveis/{{ $imovel->id }}" class="btn btn-primary">Ver Detalhes</a>
                        </div>
                    </div>
                 @endforeach
           </div>
        </div>

@endsection