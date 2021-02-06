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

        //Upload de Imagens
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$extension);

            $requestImage->move(public_path('img/imoveis'), $imageName);
            $imovel->imagem = $imageName;
        }

        $imovel->save();

        return redirect('/')->with('msg', 'Imóvel cadastrado na base');
    }
    public function show($id){
        $imovel = Imoveis::findOrFail($id);

        return view('imoveis.show', ['imovel' => $imovel]);
    }
}
