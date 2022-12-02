<x-layout title='Registro do Aluno' title2='Meu Registro' title3='Preencha suas informações a baixo:'>

@extends('layouts.app')

@section('content')

    <form class="card-body" action="{{ route('alunos.store') }}" method="POST">
    @csrf
    
    <div class="form-group col-md-4">
            <label for="inputID">ID do Usuário do Aluno:</label>
            <select id="user_id" name="user_id" class="form-control">
                <option selected>Selecione...</option>
                <option>1</option>  
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
    </div>    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nome Completo:</label>
        <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome completo do aluno">
        </div>
        <div class="form-group col-md-6">
        <label for="inputFilme">Filme Favorito:</label>
        <input type="text" class="form-control" name="filme" id="filme" placeholder=" Zack and Miri Make a Porno">
        </div>
        <div class="form-group col-md-3">
        <label for="inputCPF">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="___.___.___-__">
        </div><br>
    
    <text>Moradia:</text>
    <div class="form-group col-md-6">
        <label for="inputAddress">Endereço:</label>
        <input type="text" class="form-control" name="endereço" id="endereço" placeholder="Rua dos Bobos, nº 0">
    </div>
    <div class="form-group col-md-6">
        <label for="inputBairro">Bairro:</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Jardim do Sol">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Cidade:</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Santa Bárbara">
        </div>
        <div class="form-group col-md-4">
        <label for="inputEstado">Estado:</label>
            <select id="estado" name="estado" class="form-control">
                <option selected>Selecione...</option>
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Distrito Federal</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
             </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" placeholder="_____-___">
        </div>
    </div><br>
    <div class="form-group">
    </div>
    <button type="submit" class="btn btn-primary" role="aluno">Registrar</button><br>
    <a class="btn btn-primary" href="{{ route('alunos.index') }}" role="button">Lista</a>
    <a class="btn btn-primary" href="/home" role="button">Voltar</a>
    
    </form><br>

</x-layout>
@endsection