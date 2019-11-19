@extends('principal')

@section('cabecalho')
<a href="{{url('/')}}">Home</a>
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Professores Cadastrados</h2>
@endsection

@section('conteudo')
    <a href="{{ action('AdultoController@cadastrar') }}" type="button">
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
        @foreach ($adultos as $dados)
            <tr>
                <td>{{ $dados->id }}</td>
                <td>{{ $dados->nome }}</td>
                <td>{{ $dados->inclinacao }}</td>
                <td>{{ $dados->tamanho }}</td>
                <td>{{ $dados->espacamento }}</td>
                <td>{{ $dados->pressao }}</td>
                <td>{{ $dados->pingando }}</td>
                <td>{{ $dados->cruzando }}</td>

                <td><a href="{{action('AdultoController@editar', $dado->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <br>
@stop

