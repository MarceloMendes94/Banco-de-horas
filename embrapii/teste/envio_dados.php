<?php 
    require_once('conexao.php');
    $db_obj=new Conexao();
?>
<?php
    $desc=$_POST["texto"];
    $sql_query="insert into atividade ( descricao , data , hora_inicio , hora_fim , fk_projeto , fk_bolsista)
    values   ('".$desc."' , '0001-010-01' , '00:00' ,  '00:03'  ,  1 , 1);";
 
    $conn   = $db_obj->create();        //criar con
    $db_obj->conectar($conn);           //abre conn
    mysqli_set_charset($conn,"utf8");
    $result = $conn->query($sql_query); //executa query
?>