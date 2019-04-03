<?php   
        require_once('../conexao/conexao.php');
        $db_obj=new Conexao();
?>
<?php

    //pegando dados
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $bolsista_query = "select * from Bolsista where email='".$email."' and senha='".$senha."';";
    $conn=$db_obj->create();
    $db_obj->conectar($conn);

    $result = $conn->query($bolsista_query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //tratar os dados;
            session_start();
                $_SESSION["nome"]       =   $row['nome'];
                $_SESSION["senha"]      =   $row['senha'];
                $_SESSION["email"]      =   $row['email'];
                $_SESSION["matricula"]  =   $row['matricula'];
                $_SESSION["cod_proj"]   =   $row['fk_Projeto_codigo'];               
                         
            header('Location: ../view/bolsista.php');
        }
    }else{
        //ele pode ser um coordenador;
        $coordenador_query="select * from Coordenador where email='".$email."' and senha='".$senha."';";
        $result = $conn->query($coordenador_query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //tratar os dados;
                session_start();
                    $_SESSION["nome"]       =   $row['nome'];
                    $_SESSION["senha"]      =   $row['senha'];
                    $_SESSION["email"]      =   $row['email'];
                    $_SESSION["matricula"]  =   $row['matricula'];
                    $_SESSION["cod_proj"]   =   $row['fk_Projeto_codigo'];    
                header('Location: ../view/coordenador.php');
            }
        }
        else{
               echo "usuario indevido"; 
        }    
    }
    mysql_close($conn);
?>