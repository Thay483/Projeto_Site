
@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Cursos do Prefessor</div>

                <div class="card-body">
                A baixo estão a lista de cursos ministrados:
                </div>

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
    <a class="list-group-item list-group-item-action" >{{ $materia->id }}</a>
    </th>
    <th>
    <a class="list-group-item list-group-item-action" >{{ $materia->nome }}</a>
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

</div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection