<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // Listar todos os alunos
    public function index()
    {
        $alunos = Aluno::all(); // Recupera todos os alunos
        return view('alunos.index', compact('alunos'));
    }

    // Exibir formulário para criar um aluno
    public function create()
    {
        return view('alunos.create');
    }

    // Salvar um novo aluno no banco de dados
    public function store(Request $request)
    {
        Aluno::create($request->all()); // Cria o aluno
        return redirect()->route('alunos.index')->with('success', 'Aluno criado com sucesso!');
    }

    // Exibir os detalhes de um aluno específico
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id); // Encontra o aluno ou retorna erro 404
        return view('alunos.show', compact('aluno'));
    }

    // Exibir formulário para editar um aluno
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    // Atualizar os dados de um aluno
    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    // Excluir um aluno
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos.index')->with('success', 'Aluno excluído com sucesso!');
    }
}
