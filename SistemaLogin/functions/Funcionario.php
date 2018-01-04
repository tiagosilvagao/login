<?php
require_once "../conexao/Conexao_BD.php";

/* Função para cadastrar funcionário. */
function inserir($nome, $login, $senha) {
    $pdo = conexao_BD();
    try {
        
            $cadastrar = $pdo->prepare("INSERT INTO funcionario (nome, login, senha)
                                VALUES (:nome, :login, :senha)");
            $cadastrar->bindValue(":nome", $nome, PDO::PARAM_STR);
            $cadastrar->bindValue(":login", $login, PDO::PARAM_STR);
            $cadastrar->bindValue(":senha", $senha, PDO::PARAM_STR);
            $cadastrar->execute();
            header("Location: ../pages/funcionario.php");
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

/* Função para deletar funcionário. */
function deletar($id) {

    try {
        $pdo = conexao_BD();
        $deletar = $pdo->prepare("DELETE FROM funcionario WHERE idfuncionario = :id");
        $deletar->bindValue(":id", $id, PDO::PARAM_INT);
        $deletar->execute();
        header("Location: ../pages/funcionario.php");
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

/* Função para atualizar funcionário cadastrado */
function update($nome, $login, $senha, $id) {
    try {
            $pdo = Conexao_BD();
            $update = $pdo->prepare("UPDATE funcionario SET nome=:nome, login=:login, senha=:senha WHERE idfuncionario=:id");
            $update->bindValue(":nome", $nome);
            $update->bindValue(":login", $login);
            $update->bindValue(":senha", $senha);
            $update->bindValue(":id", $id);
            $update->execute();
            header("Location: ../pages/funcionario.php");
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}

/* Função para listar todos os funcionários cadastrados. */
function listarAll() {
    $pdo = conexao_BD();

    try {
        $listar = $pdo->prepare("SELECT * FROM funcionario");
        $listar->execute();

        if ($listar->rowCount() > 0) {
            return $listar->fetchAll(PDO::FETCH_OBJ);
        } else {
            throw new Exception("Nenhum usuário cadastrado.");
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

/* Função para listar 1 funcionário cadastrado. */
function listar($id) {
    $pdo = conexao_BD();

    try {
        $listar = $pdo->prepare("SELECT * FROM funcionario WHERE idfuncionario = :id ");
        $listar->bindValue(":id", $id);
        $listar->execute();

        if ($listar->rowCount() > 0) {
            return $listar->fetch(PDO::FETCH_OBJ);
        }
    } catch (PDOException $e) {
        echo "Erro " . $e->getMessage();
    }
}