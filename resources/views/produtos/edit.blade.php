<!-- resources/views/produtos/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    
    <form action="/produtos/{{ $produto->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}"><br><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" value="{{ $produto->preco }}"><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>