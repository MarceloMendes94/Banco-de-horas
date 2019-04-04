<?php
    require_once('../conexao/conexao.php');
    session_start();
?>
<?php function fiadores(){// esse código mostrar todos fiadores
    $nome='';$cod='';
    $sql_query="select codigo , nome from Fiador;";
    $db_obj=new Conexao();
    $conn=$db_obj->create();
    $db_obj->conectar($conn);
    $result = $conn->query($sql_query);
    $saida="<table><tr><th>código</th><th>fiador</th</tr>";
       
    if ($result->num_rows > 0) {
        // output data of each row
            while($row  = $result->fetch_assoc()) {
                $cod = $row["codigo"];
                $nome   = $row["nome"];
                $saida=$saida."<tr><th>".$cod."</th><th>".$nome."</th</tr>";
            }
    }else{
        echo "0 results";
    }  
    $saida=$saida."</table>";
    return $saida;
    } 
?>