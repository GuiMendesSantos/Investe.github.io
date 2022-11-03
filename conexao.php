<?php

define('HOST', 'sql112.epizy.com');
define('USUARIO', 'epiz_32871530');
define('SENHA', 'CmRqFJmwZaYo');
define('DB', 'epiz_32871530_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Banco de dados OFF');

?>