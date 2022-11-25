<x-layout title='Editar Perfil'>

    <h1>Editar perfil</h1>

    @include('components/flash-mensagem')

    <form action="{{ route('alunos.update', $aluno->id_aluno) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- <label>Nome Completo: </label>
        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo do Aluno"><br><br>
        
        <button type="submit">Salvar</button> -->
    
    <h3>Identificar Usuário</h3>
    <div class="form-group col-md-4">
            <label for="inputUsuario">Meu ID:</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="ID do usuário"
            value="{{ $aluno->id }}">  
    </div>

    <h3>Outras Informações</h3>    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nome Completo:</label>
        <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome completo do aluno"
        value="{{ $aluno->nome_completo }}">
        </div>
        <div class="form-group col-md-2">
        <label for="inputCPF">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="___.___.___-__"
        value="{{ $aluno->cpf }}">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Endereço:</label>
        <input type="text" class="form-control" name="endereço" id="endereço" placeholder="Rua dos Bobos, nº 0"
        value="{{ $aluno->endereço }}">
    </div>
    <div class="form-group col-md-6">
        <label for="inputBairro">Bairro:</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Jardim do Sol"
        value="{{ $aluno->bairro }}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Cidade:</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Santa Bárbara"
        value="{{ $aluno->cidade }}">
        </div>
        <div class="form-group col-md-4">
        <label for="inputEstado">Estado:</label>
        <input type="text" class="form-control" name="estado" id="estado" placeholder="São Paulo"
        value="{{ $aluno->estado }}">
        </div>
        <div class="form-group col-md-2">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" placeholder="_____-___"
        value="{{ $aluno->cep }}">
        </div>
    </div><br>
    <div class="form-group">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button><br>
    <a class="btn btn-success" href="{{ route('alunos.show', $aluno->id_aluno) }}" role="button">Visualizar Registro</a>
    </form><br>

</x-layout>