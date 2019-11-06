@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
@stop

@section('conteudo')
    <a href="{{ action('JovemController@cadastrar') }}" type="button">
        <b>Cadastrar Novo Aluno</b>
    </a>
    <br>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME DO ALUNO</th>
            <th>CURSO</th>
            <th>EVENTOS</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jovems as $dados)
            <tr>
                <td>{{ $dados->id }}</td>
                <td>{{ $dados->nome }}</td>
                <td>{{ $dados->curso }}</td>

                <td><a href="{{action('JovemController@editar', $dado->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <br>
@stop
