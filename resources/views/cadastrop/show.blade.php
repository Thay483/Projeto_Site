<x-layout title='Perfil do(a) Professor(a)' title2='Meu Registro' title3='Perfil do(a) Professor(a): {{ $professor-> nome_completo}}'>

@extends('layouts.app')

@section('content')

<form class="card-body">   
    <div class="form-row">
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
        <a class="btn btn-success" href="route('cadastrop.edit', $professor->id)" role="button">Editar</a>
        <a class="btn btn-primary" href="{{ route('cadastrop.index')}}" role="button">Voltar</a>
        
</form><br>

</x-layout>
@endsection
