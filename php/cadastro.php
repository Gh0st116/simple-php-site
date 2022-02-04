<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/paginas.css">
    <title>Cadastro Toyota</title>
</head>

<body>
    <h3>Cadastrar:</h3> <br>

    <form name="dados" action="./cadastrar.php" method="POST">
        <label>Nome:</label> <br> <br>

        <input type="text" name="nome" placeholder="Nome"> <br> <br>

        <label>Celular:</label> <br> <br>

        <input type="text" name="celular" placeholder="(DDD) 12345-6789"> <br> <br> <br> <br>

        <input type="submit" name="botao" value="Cadastrar" class="button">

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

