@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista dos Alunos</div>

                <div class="card-body">
                Abaixo estão os registros dos alunos:
                </div>

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
</div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection