<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respondWithError('Método inválido.');
}

$amountIn = $_POST['amountIn'] ?? null;
$amountOut = $_POST['amountOut'] ?? null;
$creationDate = $_POST['creationDate'];
$description = $_POST['description'];

if (!isValidTransaction($amountIn, $amountOut)) {
    respondWithError('Preencha ao menos o valor de Entrada ou Saída.');
}

// Salvar a transação no banco de dados (omitir lógica para este exemplo).

respondWithSuccess('Transação cadastrada com sucesso!');

// Funções de suporte

function isValidTransaction($amountIn, $amountOut) {
    return !empty($amountIn) || !empty($amountOut);
}

function respondWithError($message) {
    echo json_encode(['success' => false, 'message' => $message]);
    exit;
}

function respondWithSuccess($message) {
    echo json_encode(['success' => true, 'message' => $message]);
    exit;
}