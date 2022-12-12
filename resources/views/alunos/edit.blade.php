@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Perfil</div>

                <div class="card-body">
                Edite suas informações abaixo:
                </div>
    
    <form class="card-body" action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h6>Aluno: {{ $aluno->nome_completo }}</h6>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputName4">Nome Completo:</label>
            <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome completo do aluno"
            value="{{ $aluno->nome_completo }}">
            </div>
            <div class="form-group col-md-6">
            <label for="inputFilme">Filme Favorito:</label>
            <input type="text" class="form-control" name="filme" id="filme" placeholder=" Zack and Miri Make a Porno"
            value="{{ $aluno->filme }}">
            </div>
            <div class="form-group col-md-2">
            <label for="inputCPF">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="___.___.___-__"
            value="{{ $aluno->cpf }}">
            </div>
        </div><br>

        <h6>Moradia:</h6>
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
            <select id="estado" name="estado" class="form-control">
                    <option selected>{{ $aluno->estado }}</option>
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
            <input type="text" class="form-control" name="cep" id="cep" placeholder="_____-___"
            value="{{ $aluno->cep }}">
            </div>
        </div><br>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>       
        <a class="btn btn-primary" href="{{ route('alunos.show', $aluno->id) }}" role="button">Voltar</a>
    </form><br>
    </div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection