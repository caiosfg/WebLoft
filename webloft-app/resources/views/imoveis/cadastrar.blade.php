@extends('layouts.main')

@section('title', 'Cadastrar Imóvel')

@section('content')

<div id="imovel-cadastrar-container" class="col-md-6 offset-md-3">
    <h4>Cadastre seu imóvel</h4>
      <form action="/imoveis" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Imóvel:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Título do seu Imóvel">
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price" placeholder="0.00"/>
        </div>
        <div class="form-group">
            <label for="title">Metragem:</label>
            <input type="number" class="form-control" id="metragem" name="metragem" placeholder="Metragem do seu Imóvel">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="Conte mais sobre seu Imóvel"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Bairro:</label>
            <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
        <div class="form-group">
            <label for="title">Rua:</label>
            <input type="text" class="form-control" id="rua" name="rua">
        </div>
        <div class="form-group">
            <label for="title">Número:</label>
            <input type="number" class="form-control" id="numero" name="numero">
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
        </div>

        <input type="submit" id="cadastrar-btn" class="btn btn-primary" value="Registrar">
      </form>
</div>
@endsection