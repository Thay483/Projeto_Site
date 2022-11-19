<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //rota para relacionar user com aluno
    // public function relacionarAluno($id) {

    //     $user = auth()->user(); //pega o usuário e autentifica
    //     $user->alunoRelacionar()->attach($id);
    //     $aluno = Aluno::findOrFail($id);
    //     return redirect('/registro')->whit('msg', 'Você é aluno');
    // }
}
