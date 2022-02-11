@extends('layouts.main')

@section('title', 'Cadastro de Pessoas')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Página de Cadastro de Pessoas</h1>
        <form action="/list" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome da pessoa">
            </div>
            <div class="mb-3">
                <label for="CEP">CEP:</label>
                <input type="text" name="cep" id="CEP" class="form-control" placeholder="CEP da pessoa">
            </div>
            <div class="mb-3">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço da pessoa">
            </div>
            <div class="mb-3">
                <label for="numero">Numero:</label>
                <input type="text" name="numero" id="numero" class="form-control" placeholder="Numero da casa">
            </div>
            <div class="mb-3">
                <label for="uf">UF:</label>
                <input type="text" name="uf" id="uf" class="form-control" placeholder="UF da pessoa">
            </div>
            <div class="mb-3">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone da pessoa">
            </div>
            <div class="mb-3">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF da pessoa">
            </div>
            <div class="mb-3">
                <label for="rg">RG:</label>
                <input type="text" name="rg" id="rg" class="form-control" placeholder="RG da pessoa">
            </div>
            <div class="mb-3">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="">
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </form>
    </div>


@endsection
