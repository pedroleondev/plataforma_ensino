<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
</head>
<body>
    <h1>Bem-vindo ao Painel Administrativo</h1>
    <ul>
        <li><a href="{{ route('cursos.index') }}">Gerenciar Cursos</a></li>
        <li><a href="{{ route('professores.index') }}">Gerenciar Professores</a></li>
        <li><a href="{{ route('disciplinas.index') }}">Gerenciar Disciplinas</a></li>
        <li><a href="{{ route('alunos.index') }}">Gerenciar Alunos</a></li>
        <li><a href="{{ route('matriculas.index') }}">Gerenciar Matrículas</a></li>
    </ul>

</body>
</html>
