<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class CadastroProfessorController extends Controller
{
    public function index()
    {

        $professores = Professor::all(); 

        return view ('cadastrop.index')->with('professores',$professores);
        
    }

    public function create(){

        return view('cadastrop.create');

    }

    public function store(Request $request){

        Professor::create($request->all());

        return view('/home');

    }

    public function show($id){

        $professor=professor::findorfail($id);
        //return view('alunos.show')->with('aluno',$aluno);
        // $user=Auth::user();
        // $alunos=aluno::where('user_id','=','$user->id');
        // foreach($alunos as $aluno1){}
        // $aluno = $aluno1;
         return view('cadastrop.show',['professor' => $professor]);
        

    }

    public function edit(Professor $professor){

        return view('cadastrop.edit', compact('professor'));

    }

    public function update(Request $request, Professor $professor){

        $professor->fill($request->all())->save();

        return redirect()->route('cadastrop.index');

    }

}
