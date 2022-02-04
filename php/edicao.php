<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/paginas.css">
    <title>Edição Toyota</title>
</head>

<body>
    <h3>Editar cadastro:</h3> <br>

    <form name="dados" action="./editar.php" method="POST">
        <label>Digite seu número antigo</label> <br> <br>

        <input type="text" name="numAntigo" placeholder="Número antigo"> <br> <br>

        <label>Número novo</label> <br> <br>

        <input type="text" name="numNovo" placeholder="Número novo"> <br> <br> <br> <br>

        <input type="submit" name="botao" value="editar" class="button">

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