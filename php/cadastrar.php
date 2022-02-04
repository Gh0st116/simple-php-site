<?php

require_once('connect.php');

$nome = $_POST['nome'];

$celular = $_POST['celular'];

// comando sql a ser executado
$sql = "insert into cadastro(nome, telefone) values('$nome', '$celular')";

// aplicando o comando na conexao e editando as tabelas
mysqli_query($connection, $sql) or die(mysqli_connect_error());

$msg = urlencode('Cadastro efetuado');

header("location: ./cadastro.php?return=$msg");

?>