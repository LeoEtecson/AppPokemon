<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'estagio' => 'required|string',
            'idade' => 'required|string',
        ]);

        Pokemon::create($request->all());

        return redirect('/cadastro')->with('success', 'Cadastro realizado com sucesso!');
    }
}

