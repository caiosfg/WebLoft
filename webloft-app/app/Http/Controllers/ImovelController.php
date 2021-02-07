<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imoveis;
use App\Models\User;

class ImovelController extends Controller
{
    public function index(){
        
        $search = request('search');

        if($search){

            $imoveis = Imoveis::where([
                ['bairro', 'like', '%'.$search.'%']
            ])->get();

        }else{

            $imoveis = Imoveis::all();
        }

        return view('welcome',['imoveis' => $imoveis, 'search' => $search]);

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
        $imovel->items = $request->items;

        //Upload de Imagens
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$extension);

            $requestImage->move(public_path('img/imoveis'), $imageName);
            $imovel->imagem = $imageName;
        }

        $user = auth()->user();
        $imovel->user_id = $user->id;

        $imovel->save();

        return redirect('/')->with('msg', 'Imóvel cadastrado na base');
    }
    public function show($id){
        $imovel = Imoveis::findOrFail($id);
        $imovelOwner = User::where('id', $imovel->user_id)->first()->toArray();

        return view('imoveis.show', ['imovel' => $imovel, 'imovelOwner' => $imovelOwner]);
    }
    public function dashboard(){
       $user = auth()->user();

       $imoveis = $user->imoveis;

       return view('imoveis.dashboard', ['imoveis' => $imoveis]);
    }
    public function destroy($id){

        Imoveis::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Imóvel excluído com sucesso');
    }
}
