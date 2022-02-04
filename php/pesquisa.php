<!DOCTYPE html>
<html>

<head>
    <link href="../css/paginas.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Pesquisa Sorteio</title>
</head>

<body>
    <h3> Pesquisar </h3>

    <div id="conteudo">
        <form name="pesquisar" action="pesquisa.php" method="POST">
            Informe: Celular do Cliente <br> <br>

            <input type="text" name="num" size="25" />

            <input type="submit" value="Procurar" class="button search" />

            <br> <br> <br> <br> <br>
        </form>

        <?php
            ini_set('display_errors', 0);
            require_once('./connect.php');

            $num = $_POST['num'];

            if ($num != "") {
                // query mysql
                $sql = "select * from cadastro where telefone='$num'";

                // executa o comando SQL
                $res = mysqli_query($connection, $sql) or die(mysqli_connect_error());

                // coloca na variável $num o total de linhas da consulta SQL
                $num = mysqli_num_rows($res);

                // armazenar nas variáveis o conteúdo dos campos da tabela
                if ($num > 0) {
                    $linha = mysqli_fetch_row($res);

                    $cod = $linha[0];

                    $nome = $linha[1];

                    $celular = $linha[2];
                } else {
                    echo "<h3>Contato não encontrado</h3>";
                }
            }
        ?>

        <?php
            if ($num != "")
            {
                echo "Nome: " . $nome . "<br> <br> Celular:" . $celular;
            }
            
        ?>

    </div>

    <br> <br> 
    
    <a href="./relatoriopdf.php" class="button">Gerar relatório PDF</a>

    <br> <br>

    <a href="../main.html" class="button">Voltar</a>
</body>

</html>