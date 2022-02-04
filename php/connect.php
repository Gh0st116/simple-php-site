<?php

$ip = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'toyota';

// conectando com o banco toyota
$connection = mysqli_connect($ip, $usuario, $senha, $bd);

if (!$connection)
{
    die("Falha na conexão");
}

?>
