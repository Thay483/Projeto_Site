<x-layout title='Lista de Alunos'>

    <h2>Lista de Alunos Cadastrados:</h2>

    @include('components/flash-mensagem') 

    <!-- <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody> -->
    <form>
  @foreach ($alunos as $aluno)

    <h4>Aluno: {{ $aluno->nome_completo }}</h4>
        <div class="form-group col-md-1">
                <label for="inputUsuario">ID:</label>
                <input type="text" class="form-control " id="id" placeholder="{{ $aluno->id }}" readonly>  
        </div>    
    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="inputCPF">CPF:</label>
        <input type="text" class="form-control" id="cpf"  placeholder="{{ $aluno->cpf }}" readonly>
      </div>
    </div>
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
        <a class="btn btn-primary" href="{{ route('alunos.edit', $aluno->id_aluno) }}" role="button">Editar</a><br>
        <a class="btn btn-success" href="{{ route('alunos.show', $aluno->id_aluno) }}" role="button">Visualizar Registro</a><br>
        
        <form action="{{ route('alunos.destroy', $aluno->id_aluno) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Deletar</button>
        </form>

        <br><br>
        
  @endforeach
    </form><br>

</x-layout>