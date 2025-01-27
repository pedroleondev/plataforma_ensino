<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $aluno->nome }}" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $aluno->email }}" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="{{ $aluno->data_nascimento }}"><br><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
