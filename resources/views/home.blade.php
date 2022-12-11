@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Painel de Controle') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Seja bem-vindo!') }}
@role('secretario')
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="{{ route('alunos.create') }}" role="button">Cadastro de Alunos</a>
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="{{route('cadastrop.create')}}" role="button">Cadastro de Professor</a>
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="/materias" role="button">Cadastro de Cursos</a>
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="{{ route('cadastrop.index') }}" role="button">Lista de Professores</a>
@endrole
@role('aluno')
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="/materias" role="button">Lista de Cursos</a>
    <break></break>
    <!-- <h1></h1>
    <a class="btn btn-primary" href="{{route('cursos.index')}}" role="button">Cursos Matriculados</a>
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="{{route('notas.create')}}" role="button">Notas dos Alunos</a>
    <break></break>
    <h1></h1> -->
@endrole
@role('professor')
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="{{route('professores.index')}}" role="button">Cursos do Professor</a>
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="#" role="button">Perfil do Professor</a>
    <break></break>
    <h1></h1>
    <a class="btn btn-primary" href="{{ route('alunos.index') }}" role="button">Lista de Alunos</a>
    <break></break>
    <h1></h1>
    
    <break></break>
    <h1></h1>
    </div>
            </div>
        </div>
    </div>
@endrole
</div>
@endsection
