
@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de Notas</div>

                <div class="card-body">
                Registro das Notas dos Alunos:
                </div>

    <form class="card-body" action="{{ route('notas.store') }}" method="POST">
        @csrf
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName4">Usuário do Aluno:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Usuário">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputFilme">Nota do Aluno:</label>
                    <input type="integer" class="form-control" name="nota" id="nota" placeholder="00">
                </div>
        </div>
        <br>
        <a class="btn btn-primary" href="{{ route('professores.index') }}"> Back</a>
        <br>
        <button type="submit" class="btn btn-primary">Registrar</button><br>
    </form><br>
    </div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection