<?php
if (!isset($_SESSION)) session_start();
require_once('../functions/Login.php');

try{
    $login = filter_input(INPUT_POST, 'txtLogin', FILTER_SANITIZE_MAGIC_QUOTES);
    $senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_MAGIC_QUOTES);
    
    logarFuncionario($login, $senha);
} catch (Exception $e) {
    $erro = $e->getMessage();
}

?>