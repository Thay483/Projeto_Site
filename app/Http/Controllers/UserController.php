<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //aqui terá a lista dos usuários do banco de dados na view
    public function index()
    {
        //usando o controller para buscar direto no banco de dados os usuários
        //mas não é recomendado, o certo é usar models.
        // $users = DB::select('SELECT id, name, email, password FROM users');
        // dd($users);

        $users = User::all();
        //dd($users);

        return view ('users.index')->with('users', $users);
        //retorna na view index localizada em users as informações no banco de dados da tabela users

    }

    public function show($id){
        echo "<h2>Visualizar usuário $id.</h2>"; //aqui o uso aspas simples('') e aspas duplas ("") 
                                                 //faz diferença, pq esse texto tem uma variável
                                                 //e para identificar a variável, precisa-se usar 
                                                 //aspas duplas.
                                                 //as simples vai reconhecer como um texto 
                                                 //não vai imprimir a variável, mas sim a palavra id
    }
}
