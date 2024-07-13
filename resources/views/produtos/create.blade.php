<!-- resources/views/produtos/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Novo Produto</title>
</head>
<body>
    <h1>Criar Novo Produto</h1>
    
    <form action="/produtos" method="POST">
        @csrf
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome"><br><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco"><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>