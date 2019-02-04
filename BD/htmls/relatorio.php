<!doctype html5>
<html>
    <head>
    <meta charset="utf-8">
    <title> relatório </title>
    <link rel="stylesheet" type="text/css" href="estilo/estilo.css" />
    </head>
    
    <body>
        <?php
        
            function conexaoBanco(){
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
                return $conn;
            }
        
            function pegaBolsistas($conexaoBanco){
                $sql_bolsistas="
                    SELECT bolsista.nome as nome_bolsista from projeto 
                    INNER JOIN bolsista ON bolsista.fk_projeto_codigo=projeto.codigo
                    WHERE projeto.nome='banco de horas' ;";
                $result = $conexaoBanco->query($sql_bolsistas);
                $list_bolsistas=[];
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $list_bolsistas[]=$row["nome_bolsista"];
                    }
                }
                $result=0;
                echo $list_bolsistas[0]."-".$list_bolsistas[1];
            }
        
        
            $conn=conexaoBanco();
            pegaBolsistas($conn);
                
            $sql = "
                    SELECT  bolsista.nome AS nomeB,
                            atividade.descricao AS ativ,
                            atividade.data AS data,
                            TIMEDIFF (atividade.hora_fim,atividade.hora_inicio  )AS tempo
                    FROM atividade
                        INNER JOIN  bolsista ON atividade.fk_bolsista_matricula = bolsista.matricula
                        INNER JOIN projeto ON atividade.fk_projeto_codigo=projeto.codigo
                        WHERE projeto.nome='banco de horas' 
                        ORDER BY nomeB; ";

        
            $result = $conn->query($sql);
            
            echo "
            <table>";
        
            echo "<tr>
                    <th> Nome do bolsista</th>
                    <th> Atividade feita </th>
                    <th> dia             </th>
                    <th> tempo gasto     </th>
                  </tr>";
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo utf8_encode(" <tr>
                    
                                        <th>".$row["nomeB"]."</th>
                                        <th>".$row["ativ"]."</th>
                                        <th>".$row["data"]."</th>
                                        <th>".($row["tempo"])."</th> </tr>");
                }
            }
            echo "</table>
            <!--estilo aqui -->
                    <style>
                        th{
                            border: 1px solid black;
                        }
                    </sytle>
            
            ";
        ?>
    </body>
    
</html>