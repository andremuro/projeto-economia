<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Transação</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS (opcional para componentes dinâmicos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- External JS file for better structure -->
    <script src="app.js" defer></script> 
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Transação</h2>

        <!-- Feedback alert -->
        <div id="transactionAlert"></div>

        <form id="transactionForm" class="border p-4 shadow-sm bg-light">
            
            <div class="mb-3">
                <label for="amountIn" class="form-label">Valor de Entrada:</label>
                <input type="number" step="0.01" class="form-control" id="amountIn" name="amountIn">
            </div>

            <div class="mb-3">
                <label for="amountOut" class="form-label">Valor de Saída:</label>
                <input type="number" step="0.01" class="form-control" id="amountOut" name="amountOut">
            </div>

            <div class="mb-3">
                <label for="creationDate" class="form-label">Data de Criação:</label>
                <input type="date" class="form-control" id="creationDate" name="creationDate" readonly>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrição do Valor:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cadastrar Transação</button>
            </div>
        </form>
    </div>
</body>
</html>
