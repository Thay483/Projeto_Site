<x-layout title='Lista de Cursos' title2='Lista de Cursos' title3='Tabelas das informações dos curso cadastrados:'>

@extends('layouts.app')

@section('content')
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Lista de Cursos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('materias.create') }}"> Criar Novo Curso</a>
                <a class="btn btn-primary" href="/home"> Voltar</a>
            </div>
        </div>
    </div> -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Desc Mínima</th>
            <th>Lim Mínimo</th>
            <th>Lim Máximo</th>
            <th>Desc Completa</th>
            <th>Status</th>
            
            <th width="280px">Action</th>
            
        </tr>

        @foreach ($materias as $materia)
        <tr>

            <td>{{ $materia->id }}</td>
            <td>{{ $materia->nome }}</td>
            <td>{{ $materia->desc_minima }}</td>
            <td>{{ $materia->lim_min }}</td>
            <td>{{ $materia->lim_max }}</td>
            <td>{{ $materia->desc_completa }}</td>
             
            @if($materia->status == 0)
            <td>Matrículas Abertas - Mínimo de alunos não atingido!</td>

            @elseif($materia->status == 1)
            <td>Matrículas Abertas - Curso acontecerá!</td>

            @elseif($materia->status == 2)
            <td>Matrículas Encerradas!</td>

            @elseif($materia->status == 3)
            <td>Error</td>  

            @endif
            
            <td>
                <form action="{{ route('materias.destroy',$materia->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('materias.show',$materia->id) }}">Show</a>
                    @role('secretario')
                    <a class="btn btn-primary" href="{{ route('materias.edit',$materia->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endrole
                </form>
            </td>  
        </tr>

        @endforeach
        

    </table>
    <div class="row card-body">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('materias.create') }}"> Criar Novo Curso</a>
                <a class="btn btn-primary" href="/home"> Voltar</a>
            </div>
        </div>
    </div>
    {{ $materias->links() }}
</x-layout>
@endsection
