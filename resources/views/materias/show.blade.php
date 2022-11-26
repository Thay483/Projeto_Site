@extends('materias.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                    <td>{{ $materia->nome }}</td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição Completa:</strong>
                {{ $materia->desc_completa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professor:</strong>
                    <td>(Nome do Professor)</td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <td>
                        <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exampleModal" >Alunos Matriculados</a>
                    </td>
            </div>
        </div>
    </div>

    <!-- Modal1 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alunos Matriculados:</h5>
      </div>
      <div class="modal-body">
      
        <table class="table">
        
        <thead>
            <tr>
            <th scope="col">ID do Aluno</th>
            <th scope="col">Nota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$materia->alunos_id}}</td>
            <td>{{$materia->notas_nota}}</td>
            </tr>
        </tbody>
        
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
@endsection
