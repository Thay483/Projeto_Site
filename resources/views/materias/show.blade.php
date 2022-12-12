@extends('layouts.app')

@section('content')
<body>
<div class="container">
        
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Curso</h2>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
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
                        <td>{{$materia->professores->nome_completo}}</td>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <td>
                            <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exampleModal" >Alunos Matriculados</a>
                        </td>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 margin-tb">
                        <a class="btn btn-primary" href="{{ route('materias.index') }}"> Voltar</a>
                </div><br>
                    @if($materia->status < 2)
                <div class="col-lg-12 margin-tb">
                    @role('aluno')
                    <form action="/materias/inscricao/{{$materia->id}}/{{Auth::user()->id}}"> 
                        <!-- entra no curso -->
                        @csrf
                        <button type="submit" class="btn btn-primary"> Matricular</button>
                    </form>
                    @endif
                    @endrole
                    @role('professor')
                    @if($materia->status_prof != 1)
                    <form action="/materias/inscricao_prof/{{$materia->id}}/{{Auth::user()->id}}"> 
                        <!-- entra no curso -->
                        @csrf
                        <button type="submit" class="btn btn-primary"> Lecionar!</button>
                    </form>
                    @endif
                    @endrole
                    
                </div>
            
            </div>
                
            </div>
        </div>
    </div>
</div>
        
</body>
        
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
            <th scope="col">Aluno</th>
            <th scope="col">Nota</th>
            @role('professor')
            <th scope="col">Dar nota</th>
            @endrole
            </tr>
        </thead>
        <tbody>
            @foreach($materia->alunos as $alunomateria)
            <tr>
            <td>{{$alunomateria->nome_completo}}</td>
            <td>
                @foreach($notas as $nota)
                @if($nota->aluno_id==$alunomateria->id && $nota->materia_id == $materia->id)
                {{$nota->notas}}
                @endif
                @endforeach
                </td>
            @role('professor')
            <td> 
                <form action="/materias/darnota/{{ $materia->id }}/{{ $alunomateria->id }}" method="post">
                @csrf
                <div class="input-group mb-3">
                <input name="{{ $alunomateria->id }}" id="{{ $alunomateria->id }}" type="text" class="form-control" placeholder="Nota" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Enviar</button></form>
                </div>
                </div>
            </td>
            @endrole
            </tr>
            @endforeach
        </tbody>
        
        </table>
      </div>
       <div class="modal-footer">
      @role('secretario')
        <h7 style="position: relative; left: -10%;"> Quantidade de alunos matriculados: {{sizeof($materia->alunos)}} </h7>
        <h7> Média da Turma: {{$media}} </h7>
        @endrole
    @role('professor')
        <h7 style="position: relative; left: -10%;"> Quantidade de alunos matriculados: {{sizeof($materia->alunos)}} </h7>
        <h7> Média da Turma: {{$media}} </h7>
    @endrole
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    </div>
  </div>
@endsection
