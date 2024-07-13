<!-- resources/views/produtos/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    
    <a href="/produtos/criar">Criar Novo Produto</a>

    <ul>
        @foreach($produtos as $produto)
            <li>
                <a href="/produtos/{{ $produto->id }}">{{ $produto->nome }}</a>
                <form action="/produtos/{{ $produto->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>