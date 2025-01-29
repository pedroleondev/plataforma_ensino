<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Bem-vindo à área administrativa</h1>
    <ul>
        <li><a href="{{ route('admin.relatorio') }}">Relatórios</a></li>
        <li><a href="{{ route('cursos.index') }}">Gerenciar Cursos</a></li>
        <li><a href="{{ route('professores.index') }}">Gerenciar Professores</a></li>
        <li><a href="{{ route('disciplinas.index') }}">Gerenciar Disciplinas</a></li>
        <li><a href="{{ route('alunos.index') }}">Gerenciar Alunos</a></li>
        <li><a href="{{ route('admin.relatorio') }}">Ver Relatórios</a></li>
    </ul>
</body>
</html>
