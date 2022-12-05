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

    public function show(Professor $professore){

        return view('cadastrop.show')->with('professore',$professore);

    }

    public function edit(Professor $professor){

        return view('cadastrop.edit', compact('professore'));

    }

    public function update(Request $request, Professor $professor){

        $professor->fill($request->all())->save();

        return redirect()->route('cadastrop.index');

    }

}
