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

        // $cursos = Curso::all();
        // //dd($users);

        // return view ('cursos')->with('cursos', $cursos);
        //retorna na view index localizada em users as informações no banco de dados da tabela users
        $cursos = Curso::latest()->paginate(5);

        return view('cursos.index',compact('cursos'))
       ->with(request()->input('page'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cursos.create');
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
            'desc_completa' => 'required',
            'desc_minima' => 'required',
            'status' => 'required',
            'lim_min' => 'required',
            'lim_max' => 'required',
            'id_imagem' => 'required',
            'id_professor' => 'required',
            'id_aluno' => 'required',
                
        ]);

        Curso::create($request->all());

        return redirect()->route('cursos.index')
                        ->with('success','Product created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('cursos.show',compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nome' => 'required',
            'desc_completa' => 'required',
            'desc_minima' => 'required',
            'status' => 'required',
            'lim_min' => 'required',
            'lim_max' => 'required',
            'id_imagem' => 'required',
            'id_professor' => 'required',
            'id_aluno' => 'required',
        ]);

        $curso->update($request->all());

        return redirect()->route('cursos.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('cursos.index')
                        ->with('success','Product deleted successfully');
    }





}




