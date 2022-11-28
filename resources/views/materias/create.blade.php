<x-layout title='Cadastro dos Cursos' title2='Cadastro dos Cursos' title3='Cadastro das informações do novo curso:'>

@extends('layouts.app')

@section('content')
<!-- <div class="card-body row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h6>Adicionar Novo Curso</h6>
        </div>
    </div>
</div> -->

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="card-body" action="{{ route('materias.store') }}" method="POST">
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
                <strong>ID do Aluno:</strong>
                <input type="text" name="alunos_id" class="form-control" placeholder="ID do Aluno">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID do Professor:</strong>
                <input type="text" name="professores_id" class="form-control" placeholder="ID do Professor">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nota do Aluno:</strong>
                <input type="text" name="notas_nota" class="form-control" placeholder="Nota do Aluno">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição Completa:</strong>
                <textarea class="form-control" name="desc_completa" placeholder="Descrição Completa"></textarea>
            </div>
        </div><br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
    </div>

</form>
</x-layout>
@endsection
