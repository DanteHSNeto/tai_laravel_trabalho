<?php
namespace App\Http\Controllers;
use App\AdultoModel;
use Request;
class AdultoController extends Controller
{
    public function listar()
    {
        $adultos = JovemModel::orderBy('nome')->get();
//        dd($alunos);
        return view('jovens')->with('adultos', $adultos);
    }
    public function cadastrar()
    {
        return view('aduCadastro');
    }
    public function editar($id)
    {
        $adulto = JovemModel::find($id);
        return view('JovemEditar')->with('adulto', $adulto);
    }
    public function salvar($id)
    {
        // INSERT
        if ($id == 0) {
            $objJovemModel = new JovemModel();
            $objJovemModel->nome = Request::input('nome');
            $objJovemModel->inclinacao = Request::input('inclinacao');
            $objJovemModel->tamanho = Request::input('tamanho');
            $objJovemModel->espacamento = Request::input('espacamento');
            $objJovemModel->pressao = Request::input('pressao');
            $objJovemModel->pingando = Request::input('pingando');
            $objJovemModel->cruzando = Request::input('cruzando');
            $objJovemModel->save();
        }
        else {
            $objJovemModel = new JovemModel();
            $objJovemModel->nome = Request::input('nome');
            $objJovemModel->inclinacao = Request::input('inclinacao');
            $objJovemModel->tamanho = Request::input('tamanho');
            $objJovemModel->espacamento = Request::input('espacamento');
            $objJovemModel->pressao = Request::input('pressao');
            $objJovemModel->pingando = Request::input('pingando');
            $objJovemModel->cruzando = Request::input('cruzando');
            $objJovemModel->save();
        }
        return redirect()->action('JovemController@listar');
    }
    public function excluir($id)
    {
        $adulto = JovemModel::find($id);
        $adulto->delete();
        return redirect()->action('JovemController@listar');
    }
}
