@extends('cursos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Teste</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cursos.create') }}"> Criar Novo Curso</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Status</th>
            <th>Descrição Mínima</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->status }}</td>
            <td>{{ $curso->desc_minima }}</td>
            <td>
                <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cursos.show',$curso->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('cursos.edit',$curso->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $cursos->links() }}


@endsection
