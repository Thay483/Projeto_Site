@extends('layouts.app')

@section('content')


<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meu Registro</div>

                <div class="card-body">
                Perfil do(a) Professor(a): {{ $professor-> nome_completo}}
                </div>

<form class="card-body">   
    <div class="form-row">
    <p>
    <img src="/uploads/avatars/{{ $professor->foto_perfil }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">  
      </p>
        <div class="form-group col-md-6">
        <label for="inputName4">Nome Completo: {{ $professor->nome_completo }}</label>
        </div>
        <div class="form-group col-md-2">
        <label for="inputCPF">CPF: {{ $professor->cpf }}</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Endereço: {{ $professor->endereço }}</label>
    </div>
    <div class="form-group col-md-6">
        <label for="inputBairro">Bairro: {{ $professor->bairro }}</label>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Cidade: {{ $professor->cidade }}</label>
        </div>
        <div class="form-group col-md-4">
        <label for="inputEstado">Estado: {{ $professor->estado }}</label>
        </div>
        <div class="form-group col-md-2">
        <label for="inputCEP">CEP: {{ $professor->cep }}</label>
        </div><br>
        @role('secretario')
        <a class="btn btn-success" href="{{ route('cadastrop.edit', $professor->id) }}" role="button">Editar</a>
        @endrole
        <a class="btn btn-primary" href="{{ route('cadastrop.index') }}" role="button">Voltar</a>
        
</form><br>
</div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection
