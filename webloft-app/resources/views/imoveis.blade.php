@extends('layouts.main')

@section('title', 'Imoveis')

@section('content')
   <h1>Parte dos imoveis</h1>
   
   @if($busca != '')
     
     <p> Imoveis localizados em {{ $busca }}</p>
   
   @endif

    <a href="/">Voltar</a>
@endsection

    

