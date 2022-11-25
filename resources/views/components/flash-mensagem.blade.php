@if(session('sucesso'))
<div class="alert alert-success" role="alert">{{ session('sucesso') }}</div>
@endif

@if(session('danger'))
<div class="alert alert-danger" role="alert">{{ session('danger') }}</div>
@endif