
@extends('layouts.app')

@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Cursos</div>

                <div class="card-body">
                Abaixo estão listados os cursos:
                </div>

    <!-- <h2>Lista de Cursos</h2> -->
    <table class="table card-body">
    <thead>
        <tr>
        <th scope="col">Curso</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($materias as $materia)
    <tr>
    <th>
    <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#exampleModal" >{{ $materia->nome }}</a>
    </th>
    <th>
    <button type="button" class="btn btn-success">Matricular-se</button>
    </th>
    </tr>
    @endforeach
    </tbody>
    </table>
    <div class="form-group pull-right card-body">
      <a class="btn btn-primary" href="/home"> Back</a>
    </div>
    
    

    <!-- Modal1 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informação do Curso:</h5>
      </div>
      <div class="modal-body">
      <form>
      @foreach ($materias as $materia)
        <div class="form-group">
          <label for="formGroupExampleInput2">Professor: (Nome do Professor) </label>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Nota: (Nota do Aluno) </label>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Descrição mínima do curso: {{ $materia->desc_minima }}</label>
        </div>
      @endforeach
      <form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
            
            </div>
        </div>
    </div>
</div>
</body>


@endsection