@extends('layouts.main')

@section('title', 'Web Loft')

@section('content')

    <img src="/img/folder_pool.jpg" alt="Folder">
        <h1 id="init">Seja bem vindo a nossa pagina {{$nome}}</h1>

        @if(10 >5)
            <p>Lista de imoveis</p>
        @endif

        {{-- Esta parte varre a listagem da Home --}}
        
        @for($i = 0; $i < count($imoveis); $i++)
            <p>{{$imoveis[$i]}}</p>
            
            @foreach($regioes as $regiao)
                <p>{{ $regiao }}</p>
            @endforeach
        @endfor

@endsection