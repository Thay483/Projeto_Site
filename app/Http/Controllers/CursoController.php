<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;
use App\Models\Materia;


use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //usando o controller para buscar direto no banco de dados os usuários
        //mas não é recomendado, o certo é usar models.
        // $users = DB::select('SELECT id, name, email, password FROM users');
        // dd($users);

        $materias = DB::select('SELECT nome, desc_minima, notas_nota FROM materias');
        //dd($users);

        return view ('cursos.index')->with('materias', $materias);
        //retorna na view index localizada em users as informações no banco de dados da tabela users
    }

    public function create(){

        return view('cursos.index');
    }

    // public function dashboard(){

    //     $alunos = DB::select('SELECT id FROM alunos');
    //     $materias = DB::select('SELECT id FROM materias');

    //     $materias = $alunos->$materias;

    //     return view ('cursos.dashboard')->with('materias', $materias);
    // }

    
}

