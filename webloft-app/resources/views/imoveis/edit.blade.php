@extends('layouts.main')

@section('title', 'Editando '.$imovel->nome)

@section('content')

<div id="imovel-cadastrar-container" class="col-md-6 offset-md-3">
    <h4>Editando: {{ $imovel->nome }}</h4>
      <form action="/imoveis/update/{{ $imovel->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Imóvel:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Título do seu Imóvel" value="{{ $imovel->nome }}">
        </div>
        <div class="form-group">
            <label for="title">Metragem:</label>
            <input type="number" class="form-control" id="metragem" name="metragem" placeholder="Metragem do seu Imóvel" value="{{ $imovel->metragem }}">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="Conte mais sobre seu Imóvel">{{ $imovel->descricao }}</textarea>
        </div>
        <div class="form-group">
            <label for="title">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $imovel->bairro }}">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $imovel->cidade }}">
        </div>
        <div class="form-group">
            <label for="title">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua" value="{{ $imovel->rua }}">
        </div>
        <div class="form-group">
            <label for="title">Número:</label>
            <input type="number" class="form-control" id="numero" name="numero" value="{{ $imovel->numero }}">
        </div>
        <div class="form-group">
            <label for="title">Selecione características :</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Playground">Playground
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Piscina">Piscina
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Portaria">Portaria
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Churrasqueira">Churrasqueira
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Academia">Academia
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Garagem">Garagem
            </div>
        </div>
        <div class="form-group">
            <label for="image">Foto:</label>
            <input type="file" class="form-control-file" id="imagem" name="imagem">
            <img src="/img/imoveis/{{$imovel->imagem}}" alt="{{ $imovel->nome }}" class="img-preview">
        </div>

        <input type="submit" id="cadastrar-btn" class="btn btn-primary" value="Editar">
      </form>
</div>
@endsection