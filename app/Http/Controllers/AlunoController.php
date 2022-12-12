<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Http;
use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AlunoController extends Controller
{
    public function index()
    {
        
        $alunos = Aluno::all();

        return view ('alunos.index')->with('alunos', $alunos);

    }

    public function create(){

        return view('alunos.create');

    }

    public function store(Request $request){

        Aluno::create($request->all());

        return view('/home');

    }

    public function show($id){


        $aluno=aluno::findorfail($id);
        //return view('alunos.show')->with('aluno',$aluno);
        // $user=Auth::user();
        // $alunos=aluno::where('user_id','=','$user->id');
        // foreach($alunos as $aluno1){}
        // $aluno = $aluno1;
         return view('alunos.show',['aluno' => $aluno]);
        

    }

    public function edit(Aluno $aluno){

        return view('alunos.edit', compact('aluno'));

    }

    public function update(Request $request, Aluno $aluno){

        $aluno->fill($request->all())->save();

        return redirect()->route('alunos.index');

    }

    // public function destroy(Aluno $aluno){

    //     $aluno->delete();
        
    //     return redirect()->route('alunos.index');

    // }
}
