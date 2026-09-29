<?php 
$host = " 192.168.10.34 "; 
$banco = "manutencao";
$senha = "Lucas_210978";
$usuario = "postgres";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);








?>