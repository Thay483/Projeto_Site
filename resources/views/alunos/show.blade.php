@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meu Registro</div>


                <div class="card-body">
                Perfil do(a) {{ $aluno-> nome_completo}}
                </div>

<form class="card-body">   
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nome Completo: {{ $aluno->nome_completo }}</label>
        <div class="form-group col-md-6">
        <label for="inputFilme">Filme Favorito: {{ $aluno->filme }}</label>
        </div>  
        </div>
        <div class="form-group col-md-2">
        <label for="inputCPF">CPF: {{ $aluno->cpf }}</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Endereço: {{ $aluno->endereço }}</label>
    </div>
    <div class="form-group col-md-6">
        <label for="inputBairro">Bairro: {{ $aluno->bairro }}</label>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Cidade: {{ $aluno->cidade }}</label>
        </div>
        <div class="form-group col-md-4">
        <label for="inputEstado">Estado: {{ $aluno->estado }}</label>
        </div>
        <div class="form-group col-md-2">
        <label for="inputCEP">CEP: {{ $aluno->cep }}</label>
        </div><br>

        @role('secretario')
        <a class="btn btn-success" href="{{ route('alunos.edit', $aluno->id) }}" role="button">Editar</a>
        @endrole

        <a class="btn btn-primary" href="{{ route('alunos.index') }}" role="button">Voltar</a>
        
</form><br>
</div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection
