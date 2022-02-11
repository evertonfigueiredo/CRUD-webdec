@extends('layouts.main')

@section('title', 'Listagem de Pessoas')

@section('content')
    <h1>Página de listagem de pessoas</h1>

    @if (count($pessoas) == 0)
        <h2>Não a pessoas cadastradas!</h2>
    @else
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Lista de Pessoas</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data Nascimento</th>
                            <th scope="col" style="width: 15vw">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pessoas as $pessoa)
                            <tr>
                                <th>{{ $pessoa->id }}</th>
                                <td>{{ $pessoa->nome }}</td>
                                <td>{{ $pessoa->cpf }}</td>
                                <td>{{ date('d/m/Y', strtotime($pessoa->data_nascimento)) }}</td>
                                <td>
                                    <a class="btn btn-warning" href="edit/{{ $pessoa->id }}">EDITAR</a>
                                    <a class="btn btn-danger" href="{{ route('list.destroy', ['id' => $pessoa->id]) }}">
                                        DELETE
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif


@endsection
