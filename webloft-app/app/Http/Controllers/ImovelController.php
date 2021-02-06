<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imoveis;

class ImovelController extends Controller
{
    public function index(){
        $imoveis = Imoveis::all();

        return view('welcome',['imoveis' => $imoveis]);

    }
    public function cadastrar(){
        return view('imoveis.cadastrar');
    }
    public function salvar(Request $request){
       
        $imovel =  new Imoveis;

        $imovel->nome = $request->nome;
        $imovel->metragem = $request->metragem;
        $imovel->descricao = $request->descricao;
        $imovel->bairro = $request->bairro;
        $imovel->cidade = $request->cidade;
        $imovel->rua = $request->rua;
        $imovel->numero = $request->numero;
        $imovel->status = 1;

        $imovel->save();

        return redirect('/');
    }
}
