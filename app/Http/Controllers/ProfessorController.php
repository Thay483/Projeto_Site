<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Professor;
use App\Models\Aluno;
use App\Models\Materia;

class ProfessorController extends Controller
{
    public function index()
    {
        //usando o controller para buscar direto no banco de dados os usuários
        //mas não é recomendado, o certo é usar models.
        // $users = DB::select('SELECT id, name, email, password FROM users');
        // dd($users);

        $materias = DB::select('SELECT nome FROM materias'); //depois colocar o id do aluno
        //dd($users);

        return view ('professores.index')->with('materias',$materias);
        //retorna na view index localizada em users as informações no banco de dados da tabela users
    }

    public function create(){

        return view('professores.index');
    }
}
