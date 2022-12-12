<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\CadastroProfessorController;

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

// Route::get('/', [MateriaController::class, 'index']);
Route::resource('materias', MateriaController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//aqui conterá uma listinha com os usuários registrados pelo sistema de login
Route::get('/listar-usuarios', [App\Http\Controllers\UserController::class, 'index']);

//nessa rota de baixo a view irá exibir um usuário registrados pelo sistema de login através do seu id
Route::get('/visualizar-usuario/{id}', [App\Http\Controllers\UserController::class, 'show']);

//relacionar o usuário com o aluno
//você precisa enviar essa informação ao banco de dados, por isso o método é post
// Route::post('/alunos/relacionar/{id}', [AlunoController::class, 'relacionarAluno'])->middleware('auth');

Route::resource('cursos', CursoController::class);

//  Route::get('/lista-alunos', [App\Http\Controllers\AlunoController::class, 'index']);
//  Route::get('/alunos', [App\Http\Controllers\AlunoController::class, 'create']);
//  Route::post('/alunos', [App\Http\Controllers\AlunoController::class, 'store']);
Route::resource('alunos', AlunoController::class);

Route::resource('notas', NotaController::class);

Route::resource('professores', ProfessorController::class);

Route::resource('cadastrop', CadastroProfessorController::class);

// Route::get('/requisicao', function () {
//     $json = \Illuminate\Support\Facades\Http::get('https://learn-laravel.cf/movie/1')->body();
//     dd($json);
// });

Route::get('/dashboard', [CursoController::class, 'dashboard']);

Route::get('/meus-cursos', function () {
    return view('dashboard');
});

Route::get('/perfil', function () {
    return view('perfil_aluno');
});

Route::get('/materias/inscricao/{id_materia}/{id_aluno}',[MateriaController::class, 'inscricao']);

Route::post('/materias/darnota/{id_materia}/{id_aluno}',[MateriaController::class, 'darnota']);

Route::get('/materias/inscricao_prof/{id_materia}/{user_id}',[MateriaController::class, 'inscricao_prof']);

