<x-layout title='Lista de Alunos' title2='Lista dos Alunos' title3='Abaixo estão os registros dos alunos:'>

@extends('layouts.app')

@section('content')

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

          <h6>Aluno: {{ $aluno->nome_completo }}</h6>
                 
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
                <div class="pull-right">
                <a class="btn btn-primary" href="/home"> Voltar</a>
              </form><br><br>
        @endforeach
      </form><br>
</x-layout>
@endsection