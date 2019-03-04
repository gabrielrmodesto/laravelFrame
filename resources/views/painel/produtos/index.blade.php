@extends('painel.templates.template')
@section('contentList')
    <h2 class="title-list">Listagem de produtos</h2>
    <a href="" class="btn btn-primary btnCadastro">
        <i class="fas fa-plus"></i>
        Cadastrar
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Description</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produto as $produtos)
            <tr>
                <td>
                    {{$produtos->name}}
                </td>
                <td>
                    {{$produtos->description}}
                </td>
                <td class="actions">
                    <a href=""><i class="fas fa-pencil-alt"></i></a>
                    <a href=""><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection