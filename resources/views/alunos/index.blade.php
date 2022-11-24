<x-layout title='Alunos'>

    <h2>Meu Perfil</h2>

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
    <h3>Meu ID:</h3>
    <div class="form-group col-md-4">
            <label for="inputUsuario">ID:</label>
            <input type="text" class="form-control" id="id" placeholder="{{ $aluno->id }}" readonly>  
    </div>

    <h3>Meu Cadastro:</h3>    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nome Completo:</label>
        <input type="text" class="form-control" id="nome_completo" placeholder="{{ $aluno->nome_completo }}" readonly>
        </div>
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
        <a class="btn btn-success" href="#" role="button">Editar</a>
        
    @endforeach
    </form><br>
    <!-- </tbody> 
    </table> -->

    <!-- Modal1 -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

    <!-- <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Descrição do Curso:</h5>
      </div>
      <div class="modal-body">
        Aprende a cozinhar gostoso.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div> -->

</x-layout>