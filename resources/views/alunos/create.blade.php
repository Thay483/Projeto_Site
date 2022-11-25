<x-layout title='Meu Perfil'>

    <h1>Meu perfil</h1>

    @include('components/flash-mensagem')

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <!-- <label>Nome Completo: </label>
        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo do Aluno"><br><br>
        
        <button type="submit">Salvar</button> -->
    
    <h3>Identificar Usuário</h3>
    <div class="form-group col-md-4">
            <label for="inputUsuario">Meu ID:</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="ID do usuário">  
    </div>

    <h3>Outras Informações</h3>    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nome Completo:</label>
        <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome completo do aluno">
        </div>
        <div class="form-group col-md-2">
        <label for="inputCPF">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="___.___.___-__">
        </div>
    </div>
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
        <input type="text" class="form-control" name="estado" id="estado" placeholder="São Paulo">
        </div>
        <div class="form-group col-md-2">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" placeholder="_____-___">
        </div>
    </div><br>
    <div class="form-group">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button><br>
    </form><br>

</x-layout>