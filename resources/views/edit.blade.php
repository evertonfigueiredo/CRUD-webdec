@extends('layouts.main')

@section('title', 'Edição de Pessoas')

@section('content')
    <h1>Editando Pessoa: {{ $pessoa->nome }}</h1>
    <div class="card mt-3 mb-5 col-md-6 offset-md-3">
        <div class="card-body ">
            <form action="/update/{{ $pessoa->id }}" method="POST">
                @csrf
                @method('PUT')
                <h5 class="card-title">Dados Pessoais</h5>
                <div class="mb-3">
                    <label for="Nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da pessoa"
                        value="{{ $pessoa->nome }}">
                </div>
                <div class="mb-3">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF da pessoa"
                        value="{{ $pessoa->cpf }}">
                </div>
                <div class="mb-3">
                    <label for="rg">RG:</label>
                    <input type="text" name="rg" id="rg" class="form-control" placeholder="RG da pessoa"
                        value="{{ $pessoa->rg }}">
                </div>
                <div class="mb-3">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control"
                        value="{{ $pessoa->data_nascimento }}">
                </div>
                <h5 class="card-title mt-3">Dados de Endereço</h5>
                <div class="mb-3">
                    <label for="CEP">CEP:</label>
                    <input type="text" name="cep" id="CEP" class="form-control" placeholder="CEP da pessoa"
                        value="{{ $endereco->cep }}">
                </div>
                <div class="mb-3">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço da pessoa"
                        value="{{ $endereco->endereco }}">
                </div>
                <div class="mb-3">
                    <label for="numero">Numero:</label>
                    <input type="text" name="numero" id="numero" class="form-control" placeholder="Numero da casa"
                        value="{{ $endereco->numero }}">
                </div>
                <div class="mb-3">
                    <label for="uf">UF:</label>
                    <input type="text" name="uf" id="uf" class="form-control" placeholder="UF da pessoa"
                        value="{{ $estado->uf }}">
                </div>
                <h5 class="card-title">Dados de Contato</h5>
                <div class="mb-3">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone da pessoa"
                        value="{{ $telefone->telefone }}">
                </div>
                <input type="submit" value="Atualizar" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection
