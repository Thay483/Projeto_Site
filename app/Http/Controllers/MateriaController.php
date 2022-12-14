<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\AlunoMateria;
use App\Models\Professor;

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
        // $notas=AlunoMateria::where('materia_id', '=','1');
        $notas=AlunoMateria::all();
        $notasomatoria =0;
        $contador=0;
        $media=0;
        foreach($notas as $nota){
            if($nota->materia_id == $materia->id){
            $contador= $contador +1;
            $notasomatoria = $notasomatoria + $nota->notas;
        }
        }
            if($contador!=0){
            $media = $notasomatoria/$contador;
            }
       




        return view('materias.show',compact('materia'),["notas" => $notas,"media"=>$media]);
        
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
        if($request->lim_min > $request->lim_max || is_numeric($request->lim_min)!=1 || is_numeric($request->lim_max)!=1 || $request->lim_max == 0 ){
            return back()
                        ->with('error','Houve algum erro nos inputs.');

        }
        
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

    public function inscricao($id_materia,$id_aluno){

        $materia = Materia::findOrFail($id_materia);
        $aluno = Aluno::findOrFail($id_aluno);
        //$aluno = Aluno::where($id_aluno,'=','user_id');
        //$notas = < pegar nota dos foreach
        
        
        $contador = 0;
        //$notasum = 0;
        foreach($materia->alunos as $status_materia){
        $contador = $contador + 1;
        //$notasum = $notasum + $notas;
        }
        


        if ($contador < $materia->lim_min){
            $materia->status = 0;
        }

        elseif($contador <= $materia->lim_min){
            $materia->status = 1;
        }

        elseif($contador == $materia->lim_max){
            $materia->status = 2;
        }
        else{
            $materia->status = 3;
        }

        // 0 = matriculas abertas, min nao chegado
        // 1 = matriculas abertas, min chego
        // 2 = matriculas encerradas
        // 3 = undefined / deu problema


        $materia->save();


        $aluno->materias()->attach($id_materia);
        return redirect()->route('materias.index')
        ->with('success','Matriculado com sucesso!');
        
    }

    public function darnota($id_materia,$id_aluno,Request $request){
        if (is_numeric($request->$id_aluno)!=1){return back()
            ->with('error','Houve algum erro nos inputs.');}

        $materia = Materia::findOrFail($id_materia);
        $aluno = Aluno::findOrFail($id_aluno);
        $nota = AlunoMateria::where('aluno_id','=',$id_aluno)->where('materia_id', '=',$id_materia)->update([
            'notas'=> $request->$id_aluno]);

        return back();  

    }

    public function inscricao_prof($id_materia,$id_user){
        $id_user = $id_user-10;
        $materia = Materia::findOrFail($id_materia);
        $professor = Professor::findOrFail($id_user);
        //$notas = < pegar nota dos foreach
        
        
        $contador = 0;
        // //$notasum = 0;
        foreach($materia->professor as $status_materia_professor){
         $contador = $contador + 1;
         }
        


         if ($contador <= 1){
             $materia->status_prof = 1;
         }

        // 0 = nao tem professor > liberar a inscricao
        // 1 = ja tem professor > bloquear a inscricao

        $materia->save(); 


        $professor->materias()->attach($id_materia);
        return redirect()->route('materias.index')
        ->with('success','Inscrito com sucesso! Boa vinda, professor!');
        
    }   

}
