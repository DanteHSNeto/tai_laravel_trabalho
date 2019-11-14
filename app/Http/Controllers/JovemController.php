<?php
namespace App\Http\Controllers;
use App\JovemModel;
use Illuminate\Support\Facades\DB;
use Request;
class JovemController extends Controller
{
    public function listar()
    {
        $jovens = JovemModel::orderBy('nome')->get();
//        dd($alunos);
        return view('jovens')->with('jovens', $jovens);
    }
    public function cadastrar()
    {
        return view('jovCadastro');
    }
    public function editar($id)
    {
        $jovem = JovemModel::find($id);
        return view('JovemEditar')->with('jovem', $jovem );
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
        $jovem = JovemModel::find($id);
        $jovem->delete();
        return redirect()->action('JovemController@listar');
    }
}
