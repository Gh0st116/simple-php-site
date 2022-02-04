<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/paginas.css">
    <title>Exclusão Toyota</title>
</head>

<body>
    <h3>Excluir cadastro:</h3> <br>

    <form name="dados" action="./excluir.php" method="POST">
        <label>Digite seu nome:</label> <br> <br>

        <input type="text" name="nome" placeholder="Nome"> <br> <br>

        <label>Celular:</label> <br> <br>

        <input type="text" name="celular" placeholder="Número"> <br> <br> <br> <br>

        <input type="submit" name="botao" value="Excluir" class="button">

    </form>

    <?php
    if (isset($_GET['return']))
    {
        $msg = $_GET['return'];

        echo "<br>" . $msg . "<br> <br>";

        $msg = "";
    }
    ?>

    <a href="../main.html" class="button back">Voltar</a>
</body>

</html>