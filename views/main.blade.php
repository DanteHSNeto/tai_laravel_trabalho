@extends('principal')

@section('cabecalho')
<center><img src="{{url('/img/homep_ico.png')}}"></center><br><br>
    <center><h2>Principal Cadastrados</h2></center>
@endsection

@section('conteudo')
<br><br><br><br><br>
<center><a href="/jovens">Jovens</a>/
<a href="/adultos">Adultos</a>/
<a href="/idosos">Idosos</a></center>
@endsection
