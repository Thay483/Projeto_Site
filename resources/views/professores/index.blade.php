<x-layout title='Lista de Cursos Professor' title2='Lista de Cursos do Prefessor' title3='A baixo estão a lista de cursos ministrados:'>

@extends('layouts.app')

@section('content')

    <!-- <h2>Lista de Cursos</h2> -->
    <table class="table card-body">
    <thead>
        <tr>
        <th scope="col">ID</th>  
        <th scope="col">Curso</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($materias as $materia)
    <tr>
    <th>
    <a href="#" class="list-group-item list-group-item-action" >{{ $materia->id }}</a>
    </th>
    <th>
    <a href="#" class="list-group-item list-group-item-action" >{{ $materia->nome }}</a>
    </th>
    <th>
    <a type="button" class="btn btn-success" href="{{ route('professores.show', $materia->id) }}">Visualizar</a>
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