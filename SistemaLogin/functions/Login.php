<?php

require_once "../conexao/Conexao_BD.php";

function logarFuncionario($login, $senha) {
    $pdo = conexao_BD();

    try {
        $logar = $pdo->prepare("SELECT * FROM funcionario WHERE login = ? AND senha = ?");
        $logar->bindValue(1, $login);
        $logar->bindValue(2, $senha);
        $logar->execute();

        if ($logar->rowCount() == 1) {
                $dados = $logar->fetch(PDO::FETCH_OBJ);
                $_SESSION['logadoUsuario'] = TRUE;
                $_SESSION['usuario'] = $dados->nome;
                header("Location: ../pages/home.php");
            } else{                
                $_SESSION['msgErro'] = "Usuário ou senha inválidos.";
                $_SESSION['usuario'] = "";
                header("Location: ../pages/login.php");
            }
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
    }
}
