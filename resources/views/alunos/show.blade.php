<x-layout title='Perfil do(a) {{ $aluno->nome_completo}}' title2='Meu Registro' title3='Perfil do(a) {{ $aluno-> nome_completo}}'>

@extends('layouts.app')

@section('content')



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
        <a class="btn btn-success" href="{#}" role="button">Editar</a>
        <a class="btn btn-primary" href="{{ route('alunos.index') }}" role="button">Voltar</a>
        
</form><br>

</x-layout>
@endsection
