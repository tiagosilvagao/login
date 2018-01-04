<?php

$login = filter_input(INPUT_GET, 'txtLogin', FILTER_SANITIZE_MAGIC_QUOTES);
$senha = filter_input(INPUT_GET, 'txtSenha', FILTER_SANITIZE_MAGIC_QUOTES);


if ($login == 'administrador' && $senha == '123'){
    header("Location: home.php");
}else{
    header("Location: index.php");
}
?>