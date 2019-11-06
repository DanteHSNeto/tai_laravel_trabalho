<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdultoController extends Controller {

    public function listar() {
        return view('adultos');
    }
}
