<!DOCTYPE html>
<html>
<head>
    <title>Relatórios</title>
</head>
<body>
    <h1>Relatórios Administrativos</h1>
    <p>Total de Alunos: {{ $relatorio['total_alunos'] }}</p>
    <p>Total de Cursos: {{ $relatorio['total_cursos'] }}</p>
    <a href="{{ route('admin.index') }}">Voltar ao Dashboard</a>
</body>
</html>
