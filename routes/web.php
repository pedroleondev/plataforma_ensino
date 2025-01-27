<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController; // Controller de administração
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Página inicial
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Dashboard para usuários autenticados
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas protegidas para usuários autenticados (área do aluno)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Área do aluno para editar dados pessoais
    Route::get('/aluno', [AlunoController::class, 'edit'])->name('aluno.edit');
    Route::put('/aluno', [AlunoController::class, 'update'])->name('aluno.update');
});

// Rotas protegidas para administradores
Route::middleware(['auth', 'admin'])->group(function () {
    // Página inicial do administrador
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Relatórios administrativos
    Route::get('/admin/relatorio', [AdminController::class, 'relatorio'])->name('admin.relatorio');

    // CRUDs administrativos
    Route::resource('cursos', CursoController::class);
    Route::resource('professores', ProfessorController::class);
    Route::resource('disciplinas', DisciplinaController::class);
    Route::resource('alunos', AlunoController::class);
    Route::resource('matriculas', MatriculaController::class);
});

// Autenticação
require __DIR__.'/auth.php';
