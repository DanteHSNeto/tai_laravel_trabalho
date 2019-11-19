@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
    &nbsp;Cadastrar Novo Aluno
    </div>
@stop

@section('conteudo')

    <form action="{{ action('JovemController@salvar', $jovem->id) }}" method="POST">
        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome: </label>
        <input type="text" name="nome" class="form-control">
        <br>
        <label>Inclinação: </label>
        <select name="inclinacao">
            <option value="esquerdo">Inclinida para a esquerda</option>
            <option value="direito">Inclinado para a direita</option>
            <option value="sem">Sem inclinação</option>
        </select>
        <br>
        <label>Tamanho: </label>
        <select name="tamanho">
            <option value="grande">Grande</option>
            <option value="pequeno">Pequeno</option>
        </select>
        <br>
        <label>Espaçamento: </label>
        <select name="espacamento">
            <option value="grande">Grande</option>
            <option value="pequeno">Pequeno</option>
        </select>
        <br>
        <label>Pressão: </label>
        <select name="pressao">
            <option value="forte">Forte</option>
            <option value="leve">Leve</option>
        </select>
        <br>
        <label>Pingando i: </label>
        <select name="pingando">
            <option value="direto">Pingo diretamente sobre o i</option>
            <option value="topo">Pingo no topo da linha</option>
            <option value="esquerda">Pingo na esquerda do i</option>
        </select>
        <br>
        <label>Cruzando Ts: </label>
        <select name="cruzando">
            <option value="longo">Longo</option>
            <option value="curto">Curto</option>
        </select>
        <br>
        <button type="submit" >Salvar</button>
    </form>
@stop

