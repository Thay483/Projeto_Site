<x-layout title='Lista de Cursos Matriculados'>

<div class="col-md-10 offset-md-1 dashboard-title-container">
  <h2>Meus Cursos</h2> 
</div> 
<div class="col-md-10 offset-md-1 dashboard-title-container">
  @if(count($materias) > 0)
  @else
  <p> Você ainda não tem nenhum curso matriculado <a href="{{route('cursos.index')}}">Matricular em Cursos</a><p>
  @endif




</x-layout>
