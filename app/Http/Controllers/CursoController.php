<?php

namespace App\Http\Controllers;
use App\Models\Curso;


use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //usando o controller para buscar direto no banco de dados os usuários
        //mas não é recomendado, o certo é usar models.
        // $users = DB::select('SELECT id, name, email, password FROM users');
        // dd($users);

        $cursos = Curso::all();
        //dd($users);

        return view ('cursos.index')->with('cursos', $cursos);
        //retorna na view index localizada em users as informações no banco de dados da tabela users

    public function create(){

        return view('cursos.create');


    
}

