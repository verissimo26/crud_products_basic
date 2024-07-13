<!-- resources/views/produtos/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    
    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Preço:</strong> {{ $produto->preco }}</p>

    <a href="/produtos/{{ $produto->id }}/editar">Editar</a>
</body>
</html>