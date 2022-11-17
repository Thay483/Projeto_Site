<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkbox(){ 
        $users = [ ['id' => 1, 'nome' => 'Pedro'], 
        ['id' => 2, 'nome' => 'Thiago'], 
        ['id' => 3, 'nome' => 'João'], 
        ['id' => 4, 'nome' => 'Timóteo'], 
        ['id' => 5, 'nome' => 'Matheus'], ]; 
        
        $default = [1,5]; 
        
        return view('teste.form-checkbox', compact('users','default')); 
    
    } 
    
    public function saveCheckbox(Request $request){ 
        // print_r($_POST); // 
        dd($request); 
        $this->validate($request, [ 'name'=> 'required', 'users'=> 'required', ]); 
        echo "Passei"};
         `````` 
        <form method="POST" action="{{route('test_save')}}" enctype="multipart/form-data"> 
        <div class="card"> <div class="card-body"> {{csrf_field()}} @php if($errors->all()){ $values = old('users',[]); }else{ $values = $default; } @endphp @foreach ($users as $user) @if( in_array($user['id'], $values ) ) <input type="checkbox" name="users[]" value="{{$user['id']}}" checked="checked"> @else <input type="checkbox" name="users[]" value="{{$user['id']}}"> @endif {{$user['nome']}} s<br> @endforeach </div> <div class="card-footer text-right"> <input type="submit" value="Alterar" class="btn btn-success"> </div> </div> </form> 
}
