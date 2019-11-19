@extends('principal')

@section('cabecalho')
<img src="{{url('/img/homep_ico.png')}}">
    <h2>Principal Cadastrados</h2>
@endsection

@section('conteudo')
<a href="/jovens">Jovens</a>/
<a href="/adultos">Adultos</a>/
<a href="/idosos">Idosos</a>
@endsection
