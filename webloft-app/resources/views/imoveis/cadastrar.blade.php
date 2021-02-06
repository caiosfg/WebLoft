@extends('layouts.main')

@section('title', 'Cadastrar Imóvel')

@section('content')

<div id="imovel-cadastrar-container" class="col-md-6 offset-md-3">
    <h4>Cadastre seu imóvel</h4>
      <form action="/imoveis" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Imóvel:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Título do seu Imóvel">
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
        <input type="submit" id="cadastrar-btn" class="btn btn-primary" value="Registrar">
      </form>
</div>
@endsection