<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

try {
    $conn = connect();
    $stmt = $conn->prepare("SELECT id, nome, data_nascimento FROM atleta");
    $stmt->execute();
    $stmt->bind_result($id,$nome, $data_nascimento);

    $atletas = [];

    while ($stmt->fetch()) {
        //monta um array com os dados de cada atleta (formato array associativo)
        $atletas[] = [
            'id' => $id,
            'nome' => $nome,
            'data_nascimento' => $data_nascimento
        ];
    }

    //prevençao com caracteres especiais
    echo json_encode($atletas, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    $stmt->close();

    $conn->close();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao listar atletas: ' . $e->getMessage()]);
}
?>
