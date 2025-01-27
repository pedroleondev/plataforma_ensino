<!DOCTYPE html>
<html>
<head>
    <title>Criar Aluno</title>
</head>
<body>
    <h1>Criar Novo Aluno</h1>
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento"><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
