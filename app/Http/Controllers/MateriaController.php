<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::latest()->paginate(5);

        return view('materias.index',compact('materias'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->lim_min > $request->lim_max || is_numeric($request->lim_min)!=1 || is_numeric($request->lim_max)!=1 || $request->lim_max == 0 ){
            return back()
                        ->with('error','Houve algum erro nos inputs.');

        }

        $request->validate([
            'nome' => 'required',

            // 'notas_nota' => 'required',
            // 'alunos_id' => 'required',
            'professor_id',

            'desc_minima' => 'required',
            'lim_min' => 'required',
            'lim_max' => 'required',
            'desc_completa' => 'required',
        ]);

        Materia::create($request->all());

        return redirect()->route('materias.index')
                        ->with('success','Curso Criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        return view('materias.show',compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materias.edit',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'nome' => 'required',

            // 'alunos_id'=> 'required',
             'professor_id',
            // 'notas_nota'=> 'required',

            'desc_minima' => 'required',
            'lim_min' => 'required',
            'lim_max' => 'required',
            'desc_completa' => 'required',
        ]);

        $materia->update($request->all());

        return redirect()->route('materias.index')
                        ->with('success','Curso Deletado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materias.index')
                        ->with('success','Product deleted successfully');
    }
}
