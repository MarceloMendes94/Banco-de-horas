<?php
    require_once '../connection/factoryConn.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conn = new Connection();
    $bolsista = $conn->login_bolsista($email, $senha);
    if($bolsista){
       //cookie
        session_start();
        $_SESSION['nome']   = utf8_encode($bolsista[0]['nome']);
        $_SESSION['titulo'] = "bolsista";
        $_SESSION['email']  = $bolsista[0]['email'];
        $_SESSION['fkey']   = $bolsista[0]['id'];
        
        header("location: ../view/bolsista.php");  
    }else{
        $coordenador = $conn->login_coordenador($email, $senha);
        if($coordenador){
            //iniciar cookie
            session_start();
            $_SESSION['nome']   = utf8_encode($coordenador[0]['nome']);
            $_SESSION['titulo'] = "coordenador";
            $_SESSION['email']  = $coordenador[0]['email'];
            $_SESSION['fkey']   = $coordenador[0]['id'];
            header("location: ../view/coordenador.php");
        }else{
            $polo=  $conn->login_polo($email, $senha);
            if($polo){
                session_start();
                $_SESSION['nome']   = utf8_encode($polo[0]['nome']);
                $_SESSION['titulo'] = "coordenador do polo";
                $_SESSION['email']  = $polo[0]['email'];
                $_SESSION['fkey']   = $polo[0]['id'];                
                header("location: ../view/polo.php");
            }else{
                echo "erro";
            }
        }
    }
?>