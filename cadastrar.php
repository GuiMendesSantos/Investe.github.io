<?php
    session_start();
    include('conexao.php');

    $email  = $_POST["email"];
    $nome   = $_POST["nome"];
    $cpf    = $_POST["cpf"];
    $dtnasc = $_POST["dataNascimento"];
    $senha1 = $_POST["senha1"];
    $senha2 = $_POST["senha2"];

    if ($senha1 != $senha2){
        $_SESSION["invalido"] = true;
        $_SESSION["msg"] = "As senhas devem ser iguais !";
        header("Location: cadastro.php");
    }

    $sqlins = "INSERT INTO `usuario`( `email`, `senha`, `nome`, `dtnasc`, `cpf`) 
    VALUES ('$email', MD5('$senha1'),'$nome','$dtnasc','$cpf')";

    $resultado = mysqli_query($conexao, $sqlins);

    if (! $resultado) {
        $_SESSION["invalido"] = true;
        $_SESSION["danger"] = "Erro ao inserir os dados do usuário !";
        header("Location: cadastro.php");
    } else {
        $_SESSION["success"] = " Usuário cadastrado com sucesso !";
        header("Location: cadastro.php");

    }
