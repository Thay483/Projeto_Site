<x-layout title='Lista de Alunos' title2='Lista dos Alunos' title3='Abaixo estão os registros dos alunos:'>

@extends('layouts.app')

@section('content')

<table class="table card-body">
    <thead>
        <tr>
        <th scope="col">ID</th>  
        <th scope="col">Aluno</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($alunos as $aluno)
    <tr>
    <th>
    <a href="#" class="list-group-item list-group-item-action" >{{ $aluno->id }}</a>
    </th>
    <th>
    <a href="#" class="list-group-item list-group-item-action" >{{ $aluno->nome_completo }}</a>
    </th>
    <th>
      <a class="btn btn-success" href="{{ route('alunos.show', $aluno->id) }}" role="button">Visualizar</a>
      
    </th>
    </tr>
    @endforeach
    </tbody>
    </table>
    <div class="form-group pull-right card-body">
      <a class="btn btn-primary" href="/home"> Volta</a>
    </div>
    </div>
  </div>
</div>
</div>

</x-layout>
@endsection