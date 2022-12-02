<x-layout title='Registro de Notas' title2='Registro de Notas' title3='Registro das Notas dos Alunos:'>

@extends('layouts.app')

@section('content')

    <form class="card-body" action="{{ route('notas.store') }}" method="POST">
        @csrf
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName4">Usuário do Aluno:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Usuário">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputFilme">Nota do Aluno:</label>
                    <input type="integer" class="form-control" name="nota" id="nota" placeholder="00">
                </div>
        </div>
        <br>
       
        <a class="btn btn-primary" href="/home"> Back</a>
        <br>
        @role('secretario')
        <button type="submit" class="btn btn-primary">Registrar</button><br>
        @endrole
    </form><br>

</x-layout>
@endsection