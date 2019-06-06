<?php
    require_once '../connection/factoryConn.php';
    
        $data   = $_GET['data'];
        $inicio = $_GET['inicio'];
        $fim    = $_GET['fim'];
        $desc   = $_GET['desc'];        
       
        $conn = new Connection();
        $codigoProjeto= $conn->codProjeto();   
        $conn->inserir_atividade(utf8_decode($desc),$inicio,$fim,$data,$_SESSION['fkey'],$codigoProjeto);  
        header("location: ../view/bolsista.php");
