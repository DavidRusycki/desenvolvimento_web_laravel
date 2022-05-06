<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Categorias;

class ControllerCategorias extends Controller
{

    /**
     * Lista o nome das categorias
     */
    public function listar()
    {
        $aCategorias = Categorias::all();

        return view('Categorias', [
            'aCategorias' => $aCategorias
        ]);
    }

}
