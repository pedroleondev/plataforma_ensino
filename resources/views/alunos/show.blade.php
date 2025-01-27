<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Aluno</title>
</head>
<body>
    <h1>Detalhes do Aluno</h1>
    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>Email:</strong> {{ $aluno->email }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $aluno->data_nascimento ? $aluno->data_nascimento->format('d/m/Y') : 'Não informado' }}</p>

    <a href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Deseja excluir este aluno?')">Excluir</button>
    </form>
    <br><br>
    <a href="{{ route('alunos.index') }}">Voltar para a Lista</a>
</body>
</html>
