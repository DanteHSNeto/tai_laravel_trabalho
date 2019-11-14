<?php
namespace App\Http\Controllers;
use App\IdosoModel;
use Illuminate\Support\Facades\DB;
use Request;
class IdosoController extends Controller
{
    public function listar()
    {
        $idosos = IdosoModel::orderBy('nome')->get();
//        dd($alunos);
        return view('idosos')->with('idosos', $idosos);
    }
    public function cadastrar()
    {
        return view('idoCadastro');
    }
    public function editar($id)
    {
        $idoso = IdosoModel::find($id);
        return view('IdosoEditar')->with('idoso', $idoso );
    }
    public function salvar($id)
    {
        // INSERT
        if ($id == 0) {
            $objIdosoModel = new IdosoModel();
            $objIdosoModel->nome = Request::input('nome');
            $objIdosoModel->inclinacao = Request::input('inclinacao');
            $objIdosoModel->tamanho = Request::input('tamanho');
            $objIdosoModel->espacamento = Request::input('espacamento');
            $objIdosoModel->pressao = Request::input('pressao');
            $objIdosoModel->pingando = Request::input('pingando');
            $objIdosoModel->cruzando = Request::input('cruzando');
            $objIdosoModel->save();
        }
        else {
            $objIdosoModel = new IdosoModel();
            $objIdosoModel->nome = Request::input('nome');
            $objIdosoModel->inclinacao = Request::input('inclinacao');
            $objIdosoModel->tamanho = Request::input('tamanho');
            $objIdosoModel->espacamento = Request::input('espacamento');
            $objIdosoModel->pressao = Request::input('pressao');
            $objIdosoModel->pingando = Request::input('pingando');
            $objIdosoModel->cruzando = Request::input('cruzando');
            $objIdosoModel->save();
        }
        return redirect()->action('IdosoController@listar');
    }
    public function excluir($id)
    {
        $idoso = IdosoModel::find($id);
        $idoso->delete();
        return redirect()->action('IdosoController@listar');
    }
}
