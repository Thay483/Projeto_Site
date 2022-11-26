<x-layout title='Registro de Notas'>

    <h1>Registro das Notas dos Alunos</h1>

    

    <form action="{{ route('notas.store') }}" method="POST">
        @csrf
        <!-- <label>Nome Completo: </label>
        <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome Completo do Aluno"><br><br>
        
        <button type="submit">Salvar</button> -->
    
    <h4>Registro de Nota:</h4>   
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Usuário do Aluno:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Usuário">
        </div>
        <div class="form-group col-md-6">
        <label for="inputFilme">Nota do Aluno:</label>
        <input type="integer" class="form-control" name="nota" id="nota" placeholder="00">
        </div><br><br>
        
    
    <button type="submit" class="btn btn-primary">Registrar</button><br>
    </form><br>

</x-layout>