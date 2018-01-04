<?php
require_once('../functions/Funcionario.php');

    $id = $_GET['txtCodigo'];
    $nome = mb_strtoupper($_GET['txtNome']);
    $login = mb_strtolower($_GET['txtLogin']);
    $senha = $_GET['txtSenha'];

try {    
    update($nome, $login, $senha, $id);
} catch (Exception $e) {
    $erro = $e->getMessage();
}
?>