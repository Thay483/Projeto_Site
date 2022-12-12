
@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Alunos do Prefessor</div>

                <div class="card-body">
                Abaixo estão a lista dos alunos matriculados no curso:
                </div>

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
</div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection