<?php

require_once('connect.php');

$num_ant = $_POST['numAntigo'];

$num_novo = $_POST['numNovo'];

// comando sql a ser executado
$sql = "update cadastro set telefone = '$num_novo' where (telefone = '$num_ant')";

// aplicando o comando na conexao e editando as tabelas
mysqli_query($connection, $sql) or die(mysqli_connect_error());

$msg = urlencode('Edição efetuada');

header("location: ./edicao.php?return=$msg");

?>