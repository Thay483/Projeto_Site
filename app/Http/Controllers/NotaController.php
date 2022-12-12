<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    // public function index()
    // {
    //     //usando o controller para buscar direto no banco de dados os usuários
    //     //mas não é recomendado, o certo é usar models.
    //     // $alunos = DB::select('SELECT id, name, email, password FROM alunos');
    //     // dd($users);

    //     $notas = Nota::all();
    //     //dd($users);

    //     return view ('notas.index')->with('notas', $notas);
    //     //retorna na view index localizada em users as informações no banco de dados da tabela users

    // }

    public function create(){

        return view('notas.create');

    }

    public function store(Request $request){

        Nota::create($request->all());

        return view('professores.index');

    }
}
