<?php 
    require_once '../connection/factoryConn.php';
    $conn= new Connection();
    $id     = $_POST['id'];
    $desc   = $_POST['desc'];
    $inicio = $_POST['inicio'];
    $fim    = $_POST['fim'];
    $data   = $_POST['data'];
    echo $id." ".$desc." ".$inicio." ".$fim." ".$data;
    $conn->alterarAtividade($id , utf8_decode( $desc ), $fim , $inicio , $data);
    header("location: ../view/bolsista.php");
     