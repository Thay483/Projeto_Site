@extends('cursos.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Novo Curso</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Tiverem problemas com seus inputs.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('cursos.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome do Curso:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Curso">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição Mínima do Curso:</strong>
                <input type="text" name="desc_minima" class="form-control" placeholder="Descrição Mínima do Curso">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Limite Mínimo de Alunos:</strong>
                <input type="text" name="lim_min" class="form-control" placeholder="Limite Mínimo de Alunos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Limite Máximo de Alunos:</strong>
                <input type="text" name="lim_max" class="form-control" placeholder="Limite Máximo de Alunos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID da Imagem:</strong>
                <input type="text" name="id_imagem" class="form-control" placeholder="ID da Imagem">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID do Professor:</strong>
                <input type="text" name="id_professor" class="form-control" placeholder="ID do Professor">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID do Aluno:</strong>
                <input type="text" name="id_aluno" class="form-control" placeholder="ID do Aluno">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição Completa:</strong>
                <textarea class="form-control" name="desc_completa" placeholder="Descrição Completa"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
