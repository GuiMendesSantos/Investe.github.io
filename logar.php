<?php
    session_start();
    include('conexao.php');

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $consulta = "SELECT * FROM usuario WHERE email='$email' and senha='$senha'";

    $resultado = mysqli_query($conexao, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);
    $qtdeLinhas = mysqli_num_rows($resultado);

    if ($qtdeLinhas == 1) {
        $nome= $usuario["nome"];
        $_SESSION["nome"] = $nome;
        header("Location: entrada.php");
    } else {
        $tipo="danger";
        $_SESSION["danger"] = "Usuário ou senha Inválidos!";
        $_SESSION["warning"] = "Warn: Usuário ou senha Inválidos!";
	
;    }

?>