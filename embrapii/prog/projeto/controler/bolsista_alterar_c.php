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
    $id     = $_SESSION["id"];
    
    $sql_query  = "update atividade set descricao='".$desc."' , hora_inicio='".$inicio."'  ,  hora_fim='".$fim."' ,  data='".$data."' where fk_bolsista=".$id." AND id=".$cod." ;";
    echo  $sql_query;
    $conn   = $db_obj->create();//cirar con
    $db_obj->conectar($conn);//abre conn
    mysqli_set_charset($conn,"utf8");
    $result = $conn->query($sql_query); //executa query   
    header('Location: ../view/bolsista.php');
?>