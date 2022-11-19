<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//relacionar o usuário com o aluno
//você precisa enviar essa informação ao banco de dados, por isso o método é post
// Route::post('/alunos/relacionar/{id}', [AlunoController::class, 'relacionarAluno'])->middleware('auth');
