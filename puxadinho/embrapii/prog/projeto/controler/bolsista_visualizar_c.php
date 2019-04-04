<?php
    require_once('../conexao/conexao.php');
    $db_obj=new Conexao();
    session_start(); 
    $projeto= $_SESSION["cod_proj"];
    $mat    = $_SESSION["matricula"];
    $sql_query="select * from atividade where fk_Bolsista_matricula = '".$mat."';"; 
?>

    <?php //pegando dados e apresentando
        $conn   = $db_obj->create();    $db_obj->conectar($conn);    $result = $conn->query($sql_query); 
        $tabela="<table>
                <tr>
                    <th>Descrição           </th>
                    <th>Dia da atividade.   </th> 
                    <th>Hora do início.     </th>
                    <th>Hora do Fim.        </th>
                    <th>código da atividade.</th>     
                </tr>" ;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $tabela=$tabela."<tr>
                                    <th>".utf8_encode($row["descricao"])."</th>
                                    <th>".$row["data"].                 "</th> 
                                    <th>".$row["hora_inicio"].          "</th>
                                    <th>".$row["hora_fim"].             "</th>
                                    <th>".$row["codigo"].               "</th>     
                                </tr>";
            }
        }  
        $tabela=$tabela."</tabela>";
    ?>