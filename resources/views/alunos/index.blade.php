<!DOCTYPE html>
<html>
<head>
    <title>Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <a href="{{ route('alunos.create') }}">Novo Aluno</a>
    <ul>
        @foreach($alunos as $aluno)
            <li>{{ $aluno->nome }} - {{ $aluno->email }}</li>
        @endforeach
    </ul>
</body>
</html>
