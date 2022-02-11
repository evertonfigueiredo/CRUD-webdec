<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Telefone;
use App\Models\Estado;
use App\Models\Endereco;

class PessoaController extends Controller
{
    public function index()
    {

        return view('welcome');
    }

    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $telefone = Telefone::where('pessoa_id', $pessoa->id)->first();
        $endereco = Endereco::where('id', $pessoa->endereco_id)->first();
        $estado = Estado::where('id', $endereco->estados_id)->first();

        return view('edit', ['pessoa' => $pessoa, 'telefone' => $telefone, 'endereco' => $endereco, 'estado' => $estado]);
    }

    public function destroy($id)
    {

        $pessoa = Pessoa::findOrFail($id);
        $endereco = Endereco::where('id', $pessoa->endereco_id)->first();
        $estado = Estado::where('id', $endereco->estados_id)->first()->delete();
        $endereco->delete();
        $pessoa->delete();
        $telefone = Telefone::where('pessoa_id', $pessoa->id)->first()->delete();

        return redirect()->route('list');
    }

    public function list()
    {
        $pessoas = Pessoa::all();
        return view('list', ['pessoas' => $pessoas]);
    }

    public function store(Request $request)
    {

        $pessoa = new Pessoa;
        $telefone = new Telefone;
        $estado = new Estado;
        $endereco = new Endereco;

        //Salvamento na tabela estado
        $estado->uf = $request->uf;
        $estado->save();

        //Salvamento na tabela endereco
        $endereco->endereco = $request->endereco;
        $endereco->cep = $request->cep;
        $endereco->numero = $request->numero;
        $endereco->estados_id = $estado->id;
        $endereco->save();

        //Salvamento na tabela pessoa
        $pessoa->nome = $request->nome;
        $pessoa->endereco_id = $endereco->id;
        $pessoa->cpf = $request->cpf;
        $pessoa->rg = $request->rg;
        $pessoa->data_nascimento = $request->data_nascimento;
        $pessoa->save();

        //Salvamento na tabela telefone
        $telefone->telefone = $request->telefone;
        $telefone->pessoa_id = $pessoa->id;
        $telefone->save();


        return redirect('/list')->with('msg', 'Pessoa cadastrada com sucesso!');
    }

    public function update(Request $request){
        $pessoa = Pessoa::findOrFail($request->id);
        $telefone = Telefone::where('pessoa_id', $pessoa->id)->first();
        $endereco = Endereco::where('id', $pessoa->endereco_id)->first();
        $estado = Estado::where('id', $endereco->estados_id)->first();

        //Atualizando a tabela estado
        $estado->uf = $request->uf;
        $estado->update();

        //Atualizando a tabela endereco
        $endereco->endereco = $request->endereco;
        $endereco->cep = $request->cep;
        $endereco->numero = $request->numero;
        $endereco->estados_id = $estado->id;
        $endereco->update();

        //Atualizando a tabela pessoa
        $pessoa->nome = $request->nome;
        $pessoa->endereco_id = $endereco->id;
        $pessoa->cpf = $request->cpf;
        $pessoa->rg = $request->rg;
        $pessoa->data_nascimento = $request->data_nascimento;
        $pessoa->update();

        //Atualizando a tabela telefone
        $telefone->telefone = $request->telefone;
        $telefone->pessoa_id = $pessoa->id;
        $telefone->update();
        

        return redirect()->route('list');
    }
}
