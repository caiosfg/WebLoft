@extends('layouts.main')

@section('title', $imovel->title)

@section('content')

    <div class="col-md-10 offset-md-i">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/imoveis/{{ $imovel->imagem }}" class="img-fluid" alt="{{ $imovel->nome }}">
            </div>
            <div id="image-container" class="col-md-6">
                <h4>{{ $imovel->nome }}</h4>
                <p class="imovel-city"><ion-icon name="business-outline"></ion-icon> {{ $imovel->cidade }}</p>
                <p class="imovel-bairro"><ion-icon name="storefront-outline"></ion-icon> {{ $imovel->bairro }}</p>
                <p class="imovel-owner"><ion-icon name="person-outline"></ion-icon> Proprietário : {{ $imovelOwner['name'] }}</p>
                <p class="imovel-owner"><ion-icon name="card-outline"></ion-icon> Preço : {{"R$ " .number_format($imovel->price,2,",",".") }}</p>
                <h4 class="items-head">Comodidades</h4>
                <ul class="items-list">
                    @foreach($imovel->items as $item)
                        <li><ion-icon name="checkmark-done-outline"></ion-icon> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h4><ion-icon name="newspaper-outline"></ion-icon> Detalhes do Imóvel:</h4>
                <p class="imovel-description"><span> {{ $imovel->descricao }}</span></p>
            </div>
        </div>
    </div>

    <div id="mapholder"></div>
@endsection