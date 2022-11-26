<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Http;
use App\Models\Aluno;
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
    public function index()
    {
        //usando o controller para buscar direto no banco de dados os usuários
        //mas não é recomendado, o certo é usar models.
        // $alunos = DB::select('SELECT id, name, email, password FROM alunos');
        // dd($users);

        $alunos = Aluno::all();
        //dd($users);

        return view ('alunos.index')->with('alunos', $alunos);
        //retorna na view index localizada em users as informações no banco de dados da tabela users

    }

    public function create(){

        return view('alunos.create');

    }

    public function store(Request $request){

        Aluno::create($request->all());

        return view('/home');

    }

    public function show(Aluno $aluno){

        return view('alunos.show', compact('aluno'));

    }

    public function edit(Aluno $aluno){

        return view('alunos.edit', compact('aluno'));

    }

    public function update(Request $request, Aluno $aluno){

        $aluno->fill($request->all())->save();

        return redirect()->route('alunos.index');

    }

    public function destroy(Aluno $aluno){

        $aluno->delete();
        
        return redirect()->route('alunos.index');

    }
}
