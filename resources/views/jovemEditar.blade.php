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
        <input type="text" name="nome" class="form-control" value="{{$jovem->nome}}">
        <br>
        <label>Curso: </label>
        <input type="text" name="curso" class="form-control" value="{{$jovem->curso}}">
        <br>
        <label>Turma: </label>
        <input type="text" name="turma" class="form-control" value="{{$jovem->turma}}">
        <br>
        <button type="submit" >Salvar</button>
    </form>
@stop

