<x-layout title='Lista de Alunos' title2='Lista dos Alunos' title3='Abaixo estão registrados os alunos do colégio:'>

@extends('layouts.app')

@section('content')

      <form class="card-body">
        @foreach ($alunos as $aluno)

          <h6>Aluno: {{ $aluno->nome_completo }}</h6>
              <div class="form-group col-md-2">
                      <label for="inputUsuario">Usuário:</label>
                      <input type="text" class="form-control " id="name" placeholder="{{ $aluno->name }}" readonly>  
              </div>    
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCPF">CPF:</label>
              <input type="text" class="form-control" id="cpf"  placeholder="{{ $aluno->cpf }}" readonly>
            </div>
          </div>
            <div class="form-group col-md-6">
              <label for="inputFilme">Filme Favorito:</label>
              <input type="text" class="form-control" name="filme" id="filme" placeholder="{{ $aluno->filme }}" readonly>
              </div><br>
        
        <h6>Moradia:</h6>
          <div class="form-group col-md-6">
              <label for="inputAddress">Endereço:</label>
              <input type="text" class="form-control" id="endereço" placeholder="{{ $aluno->endereço }}" readonly>
          </div>
          <div class="form-group col-md-6">
              <label for="inputBairro">Bairro:</label>
              <input type="text" class="form-control" id="bairro" placeholder="{{ $aluno->bairro }}" readonly>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
              <label for="inputCity">Cidade:</label>
              <input type="text" class="form-control" id="cidade" placeholder="{{ $aluno->cidade }}" readonly>
              </div>
              <div class="form-group col-md-4">
              <label for="inputEstado">Estado:</label>
              <input type="text" class="form-control" id="estado" placeholder="{{ $aluno->estado }}" readonly>
              </div>
              <div class="form-group col-md-2">
              <label for="inputCEP">CEP</label>
              <input type="text" class="form-control" id="cep" placeholder="{{ $aluno->cep }}" readonly>
              </div><br>
              <a class="btn btn-primary" href="{{ route('alunos.edit', $aluno->id) }}" role="button">Editar</a><br>
              <a class="btn btn-success" href="{{ route('alunos.show', $aluno->id) }}" role="button">Visualizar Registro</a><br>
              
              <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Deletar</button>
              </form><br><br>
        @endforeach
      </form><br>
</x-layout>
@endsection