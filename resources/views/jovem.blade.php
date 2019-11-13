
@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
@stop

@section('conteudo')
    <a href="{{ action('JovemController@cadastrar') }}" type="button">
        <b>Cadastrar Novo Usuário</b>
    </a>
    <br>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME DO USUÁRIO</th>
            <th>INCLINAÇÃO</th>
            <th>TAMANHO</th>
            <th>ESPAÇAMENTO</th>
            <th>PRESSÃO</th>
            <th>PINGANDO</th>
            <th>CRUZANDO</th>
            <th>AÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jovens as $dados)
            <tr>
                <td>{{ $dados->id }}</td>
                <td>{{ $dados->nome }}</td>
                <td>{{ $dados->inclinacao }}</td>
                <td>{{ $dados->tamanho }}</td>
                <td>{{ $dados->espacamento }}</td>
                <td>{{ $dados->pressao }}</td>
                <td>{{ $dados->pingando }}</td>
                <td>{{ $dados->cruzando }}</td>

                <td><a href="{{action('alunoController@editar', $dado->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <br>
@stop
