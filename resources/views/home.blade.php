@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seja bem-vindo!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('...') }}
                </div>
                <div class="container">
  <div class="row justify-content-start">
    <div class="col-4">
    <a class="btn btn-primary" href="/cursos" role="button">Cursos</a>
    </div>
    <break></break>
    <h1></h1>
    <div class="col-4">
    <a class="btn btn-primary" href="/cursos_matriculados" role="button">Cursos Matriculados</a>
    <a class="btn btn-primary" href="/cursos" role="button">Cursos</a>
    </div>
    <break></break>
    <h1></h1>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
