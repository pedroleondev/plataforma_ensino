<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::with(['curso', 'professor'])->get();
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        $request->validate(['titulo' => 'required']);
        Disciplina::create($request->all());
        return redirect()->route('disciplinas.index');
    }
}
