<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>
</head>
<body>
    <h1>Editar Dados do Aluno</h1>
    <form method="POST" action="{{ route('aluno.update') }}">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ Auth::user()->nome }}" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
        
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
