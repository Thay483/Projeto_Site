@extends('materias.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('materias.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Tiveram alguns problemas com seu input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('materias.update',$materia->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $materia->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição Mínima:</strong>
                    <input type="text" name="desc_minima" value="{{ $materia->desc_minima }}" class="form-control" placeholder="Descrição Mínima">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" value="{{ $materia->status }}" class="form-control" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Limite Mínimo:</strong>
                    <input type="text" name="lim_min" value="{{ $materia->lim_min }}" class="form-control" placeholder="Limite Mínimo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Limite Máximo:</strong>
                    <input type="text" name="lim_max" value="{{ $materia->lim_max }}" class="form-control" placeholder="Limite Máximo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Da Imagem:</strong>
                    <input type="text" name="id_imagem" value="{{ $materia->id_imagem }}" class="form-control" placeholder="ID Da Imagem">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Do Professor:</strong>
                    <input type="text" name="id_professor" value="{{ $materia->id_professor }}" class="form-control" placeholder="ID Do Professor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Do Aluno:</strong>
                    <input type="text" name="id_aluno" value="{{ $materia->id_aluno }}" class="form-control" placeholder="ID Do Aluno">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição Completa:</strong>
                    <textarea class="form-control" style="height:50px" name="desc_completa" placeholder="Descrição Completa">{{ $materia->desc_completa }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
