<?php
namespace App\Http\Controllers;
use App\AdultoModel;
use Illuminate\Support\Facades\DB;
use Request;

class AdultoController extends Controller
{
    public function listar()
    {
        $adultos = AdultoModel::orderBy('nome')->get();
//        dd($alunos);
        return view('adultos')->with('adultos', $adultos);
    }
    public function cadastrar()
    {
        return view('aduCadastro');
    }
    public function editar($id)
    {
        $adulto = AdultoModel::find($id);
        return view('AdultoEditar')->with('adulto', $adulto);
    }
    public function salvar($id)
    {
        // INSERT
        if ($id == 0) {
            $objAdultoModel = new AdultoModel();
            $objAdultoModel->nome = Request::input('nome');
            $objAdultoModel->inclinacao = Request::input('inclinacao');
            $objAdultoModel->tamanho = Request::input('tamanho');
            $objAdultoModel->espacamento = Request::input('espacamento');
            $objAdultoModel->pressao = Request::input('pressao');
            $objAdultoModel->pingando = Request::input('pingando');
            $objAdultoModel->cruzando = Request::input('cruzando');
            $objAdultoModel->save();
        }
        else {
            $objAdultoModel = new AdultoModel();
            $objAdultoModel->nome = Request::input('nome');
            $objAdultoModel->inclinacao = Request::input('inclinacao');
            $objAdultoModel->tamanho = Request::input('tamanho');
            $objAdultoModel->espacamento = Request::input('espacamento');
            $objAdultoModel->pressao = Request::input('pressao');
            $objAdultoModel->pingando = Request::input('pingando');
            $objAdultoModel->cruzando = Request::input('cruzando');
            $objAdultoModel->save();
        }
        return redirect()->action('AdultoController@listar');
    }
    public function excluir($id)
    {
        $adulto = AdultoModel::find($id);
        $adulto->delete();
        return redirect()->action('AdultoController@listar');
    }
}
