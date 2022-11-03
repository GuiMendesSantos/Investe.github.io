<?php

$query = "select * from usuario";

$result = mysqli_query($conexao, $query);

echo $row = mysqli_num_rows($result);

?>
