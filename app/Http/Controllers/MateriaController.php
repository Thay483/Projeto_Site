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

        return view('products.index',compact('materias'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'desc_minima' => 'required',
            'status' => 'required',
            'lim_min' => 'required',
            'lim_max' => 'required',
            'id_imagem' => 'required',
            'id_professor' => 'required',
            'id_aluno' => 'required',
            'desc_completa' => 'required',
        ]);

        Materia::create($request->all());

        return redirect()->route('products.index')
                        ->with('success','Curso Criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materias)
    {
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
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
            'desc_minima' => 'required',
            'status' => 'required',
            'lim_min' => 'required',
            'lim_max' => 'required',
            'id_imagem' => 'required',
            'id_professor' => 'required',
            'id_aluno' => 'required',
            'desc_completa' => 'required',
        ]);

        $materia->update($request->all());

        return redirect()->route('products.index')
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

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
