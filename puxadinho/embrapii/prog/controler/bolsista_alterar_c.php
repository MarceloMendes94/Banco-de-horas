<?php   
        require_once('../conexao/conexao.php');
        $db_obj=new Conexao();
        session_start();
?>
<?php

    $data   = $_POST["data"];
    $inicio = $_POST["inicio"];
    $fim    = $_POST["fim"];
    $desc   = $_POST["descricao"];
    $cod    = $_POST["codigo"];
    $mat    = $_SESSION["matricula"];
    
    $sql_query  = "update atividade set descricao='".utf8_encode($desc)."' , hora_inicio='".$inicio."'  ,  hora_fim='".$fim."' ,  data='".$data."' where fk_Bolsista_matricula='".$mat."' AND codigo=".$cod." ;";
    $conn   = $db_obj->create();//cirar con
    $db_obj->conectar($conn);//abre conn
    $result = $conn->query($sql_query); //executa query   
    header('Location: ../view/bolsista.php');
?>