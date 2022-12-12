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
    <form class="card-body" action="route('cadastrop.update', $professor->id)" method="POST">
        @csrf
        @method('PUT')
        <h6>Professor: {{ $professor->nome_completo }}</h6>
        <label for="inputfoto_perfil">Foto de Perfil:</label>
            <select id="foto_perfil" name="foto_perfil" class="form-group col-md-6">
                    <option selected>{{ $professor->foto_perfil }}</option>
                    <option>foto1.jpg</option>
                    <option>foto2.jpg</option>
                    <option>foto3.jpg</option>
                    <option>foto4.jpg</option>
                </select>
                <br></br>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputName4">Nome Completo:</label>
            <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome completo do professor"
            value="{{ $professor->nome_completo }}">
            </div>
            <div class="form-group col-md-2">
            <label for="inputCPF">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="___.___.___-__"
            value="{{ $professor->cpf }}">
            </div>
        </div><br>

        <h6>Moradia:</h6>
        <div class="form-group col-md-6">
            <label for="inputAddress">Endereço:</label>
            <input type="text" class="form-control" name="endereço" id="endereço" placeholder="Rua dos Bobos, nº 0"
            value="{{ $professor->endereço }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputBairro">Bairro:</label>
            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Jardim do Sol"
            value="{{ $professor->bairro }}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">Cidade:</label>
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Santa Bárbara"
            value="{{ $professor->cidade }}">
            </div>
            <div class="form-group col-md-4">
            <label for="inputEstado">Estado:</label>
            <select id="estado" name="estado" class="form-control">
                    <option selected>{{ $professor->estado }}</option>
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
            value="{{ $professor->cep }}">
            </div>
        </div><br>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="{{ route('cadastrop.show', $professor->id) }}" role="button">Voltar</a>
    </form><br>
    </div>
            
            </div>
        </div>
    </div>
</div>
</body>
@endsection