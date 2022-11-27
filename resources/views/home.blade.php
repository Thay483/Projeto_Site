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
                </div>
                
@if ($role = 'admin' or $role = 'aluno')
        <a class="btn btn-primary" href="{{route('cursos.index')}}" role="button">Cursos Matriculados</a>
    
    <break></break>
    <h1></h1>

    <a class="btn btn-primary" href="{{route('notas.create')}}" role="button">Notas dos Alunos</a>
    
    <break></break>
    <h1></h1>
@endif
@if ($role = 'secretario')
    
        <a class="btn btn-primary" href="/materias" role="button">Cadastro de Cursos</a>
    
    <break></break>
    <h1></h1>
@endif
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
