<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MateriaController::class, 'index']);
Route::resource('products', MateriaController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//aqui conterá uma listinha com os usuários registrados pelo sistema de login
Route::get('/listar-usuarios', [App\Http\Controllers\UserController::class, 'index']);

//nessa rota de baixo a view irá exibir um usuário registrados pelo sistema de login através do seu id
Route::get('/visualizar-usuario/{id}', [App\Http\Controllers\UserController::class, 'show']);

//relacionar o usuário com o aluno
//você precisa enviar essa informação ao banco de dados, por isso o método é post
// Route::post('/alunos/relacionar/{id}', [AlunoController::class, 'relacionarAluno'])->middleware('auth');

Route::get('/cursos', [App\Http\Controllers\Curso2Controller::class, 'index']);

Route::get('/requisicao', function () {
    $json = \Illuminate\Support\Facades\Http::get('https://learn-laravel.cf/movie/1')->body();
    dd($json);
});

Route::get('/cursos_matriculados', function () {
    return view('cursos_matriculados');
});

Route::get('/perfil', function () {
    return view('perfil_aluno');
});

