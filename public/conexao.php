<?php
$banco = 'vendas-saa';
$usuario = 'vendas';
$senha = 'vendas123';
$host = 'mysql';
date_default_timezone_set('America/Sao_Paulo');
try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    echo "<br>";
    echo "Erro nos dados de conexão com o banco de dados";
}
