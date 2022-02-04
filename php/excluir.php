<?php

require_once('connect.php');

$nome = $_POST['nome'];

$num = $_POST['celular'];

// comando sql a ser executado
$sql = "delete from cadastro where (nome = '$nome' AND telefone = '$num')";

// aplicando o comando na conexao e editando as tabelas
mysqli_query($connection, $sql) or die(mysqli_connect_error());

$msg = urlencode('Exclusão efetuada');

header("location: ./exclusao.php?return=$msg");

?>