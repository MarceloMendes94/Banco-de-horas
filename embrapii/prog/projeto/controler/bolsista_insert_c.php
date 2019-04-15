<?php   
    require_once('../conexao/conexao.php');
    $db_obj=new Conexao();
    session_start();
     //pegando dados
    $data   = $_POST["data"];
    $inicio = $_POST["inicio"];
    $fim    = $_POST["fim"];
    $desc   = $_POST["descricao"];
    $projeto= $_SESSION["cod_proj"];
    $id    =  $_SESSION["id"];
    $sql_query="insert into atividade ( descricao , data , hora_inicio , hora_fim , fk_projeto , fk_bolsista)values   ('".$desc."' , '".$data."' , '".$inicio."' ,  '".$fim."'  ,  ".$projeto." , ".$id.");"; 
    $conn   = $db_obj->create();        //criar con
    $db_obj->conectar($conn);           //abre conn
    mysqli_set_charset($conn,"utf8");   //never forgot
    $result = $conn->query($sql_query); //executa query
    header('Location: ../view/bolsista.php');
?>