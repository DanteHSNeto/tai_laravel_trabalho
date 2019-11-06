<?php

namespace App\Http\Controllers;

use App\JovemModel;
use Request;

class JovemController extends Controller
{
    public function listar()
    {
        $jovems = JovemModel::orderBy('nome')->get();
//        dd($alunos);
        return view('jovens')->with('jovens', $jovems);
    }

    public function cadastrar()
    {
        return view('jovemCadastrar');
    }
    public function editar($id)
    {
        $jovem = JovemModel::find($id);

        return view('jovemEditar')->with('jovem', $jovem );
    }


    public function salvar($id)
    {
        // INSERT
        if ($id == 0) {
            $objJovemModel = new JovemModel();
            $$objJovemModel->nome = Request::input('nome');
            $$objJovemModel->curso = Request::input('curso');
            $$objJovemModel->turma = Request::input('turma');
            $$objJovemModel->save();
        }
        else {
            $$objJovemModel = JovemModel::find($id);
            $$objJovemModel->nome = Request::input('nome');
            $$objJovemModel->curso = Request::input('curso');
            $$objJovemModel->turma = Request::input('turma');
            $$objJovemModel->save();
        }
        return redirect()->action('Jovemontroller@listar');
    }
    public function excluir($id)
    {
        $jovem = JovemModel::find($id);
        $jovem->delete();
        return redirect()->action('JovemController@listar');
    }

}
