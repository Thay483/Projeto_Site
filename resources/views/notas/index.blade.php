<x-layout title='Cursos'>

    <h2>Lista de Cursos</h2>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Matrícula</th>
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
