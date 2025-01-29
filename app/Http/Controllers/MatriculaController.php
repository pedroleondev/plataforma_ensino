<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::with(['aluno', 'curso'])->get();
        return view('matriculas.index', compact('matriculas'));
    }

    public function create()
    {
        return view('matriculas.create');
    }

    public function store(Request $request)
    {
        Matricula::create($request->all());
        return redirect()->route('matriculas.index');
    }

    public function destroy(Matricula $matricula)
    {
        $matricula->delete();
        return redirect()->route('matriculas.index');
    }
}
