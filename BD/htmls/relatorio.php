<!doctype html5>
<html>
    <head>
    <meta charset="utf-8">
    <title> relatório </title>
    <link rel="stylesheet" type="text/css" href="" />
    </head>
    
    <body>
        <?php
        
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "banco_ic_horas";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT bolsista.nome AS nomeB,atividade.descricao AS ativ FROM atividade
            INNER JOIN  bolsista ON atividade.fk_bolsista_matricula = bolsista.matricula
            INNER JOIN projeto ON atividade.fk_projeto_codigo=projeto.codigo
            WHERE projeto.nome='banco de horas'";

        
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo utf8_encode("Nome do bolsista:".$row["nomeB"]."<br>Atividade feita:  ".$row["ativ"]."<br><br>");
                }
            }
        ?>
    </body>
    
</html>