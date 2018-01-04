<?php
require_once('../functions/Funcionario.php');

$nome = mb_strtoupper($_GET['txtNome']);
$login = mb_strtolower($_GET['txtLogin']);
$senha = $_GET['txtSenha'];


try {
    inserir($nome, $login, $senha);
} catch (Exception $e) {
    $erro = $e->getMessage();
}
?>