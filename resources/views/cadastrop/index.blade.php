@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Prefessores</div>

                <div class="card-body">
                A baixo estão a lista de professores:
                </div>
    <table class="table card-body">
    <thead>
        <tr>
        <th scope="col">ID</th>  
        <th scope="col">Professor</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($professores as $professor)
    <tr>
    <th>
    <a class="list-group-item list-group-item-action" >{{ $professor->id }}</a>
    </th>
    <th>
    <a class="list-group-item list-group-item-action" >{{ $professor->nome_completo }}</a>
    </th>
    <th>
    <a class="btn btn-success" href="{{ route('cadastrop.show', $professor->id)}}" role="button">Visualizar</a>
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