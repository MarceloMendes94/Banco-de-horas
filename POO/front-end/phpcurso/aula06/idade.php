<html>
    <head>
        <title> form </title>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $ano  = $_POST["ano"];
            $data = date('Y');
            echo "$nome você tem ".($data-$ano)." anos";
        ?>
        <a href="ex2.php">Voltar</a>
    </body>
</html>