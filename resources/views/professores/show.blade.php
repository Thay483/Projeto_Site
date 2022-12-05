<x-layout title='Lista de Alunos Professor' title2='Lista de Alunos do Prefessor' title3='Abaixo estão a lista dos alunos matriculados no curso:'>

@extends('layouts.app')

@section('content')

    <!-- <h2>Lista de Cursos</h2> -->
    <table class="table card-body">
    <thead>
        <tr>
        <th scope="col">Alunos</th>
        <th scope="col">Notas</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    
    <tr>
    <th>
    <!-- botar o id_aluno aqui nesse "botão" -->
    <a href="#" class="list-group-item list-group-item-action" >(Nome do Aluno)</a>
    </th>
    <th>
    <!-- botar o id_aluno aqui nesse "botão" -->
    <a href="#" class="list-group-item list-group-item-action" >(Nota do Aluno)</a>
    </th>
    <th>
    <!-- botar o id_aluno aqui nesse "botão" -->
    <a type="button" class="btn btn-success" href="{{ route('notas.create')}}" }}>Editar</a>
    </th>
    </tr>
    
    </tbody>
    </table>
    <div class="form-group pull-right card-body">
    <a type="button" class="btn btn-primary" href="{{ route('professores.index')}}" }}>Voltar</a>
    </div>
    </div>
  </div>
</div>
</div>

</x-layout>
@endsection