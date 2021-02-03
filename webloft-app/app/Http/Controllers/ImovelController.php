<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index(){
        $nome = "Caio";
        $imoveis = [1,2,3,4,5];
        $regioes = ['Rio de Janeiro', 'Minas Gerais', 'São Paulo', 'Curitiba'];

        return view('welcome', 
            [
                'nome' => $nome, 
                'imoveis' => $imoveis,
                'regioes' => $regioes
            ]
        );

    }
    public function cadastrar(){
        return view('imoveis.cadastrar');
    }
}
