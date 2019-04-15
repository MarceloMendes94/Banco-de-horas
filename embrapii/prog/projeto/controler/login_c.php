<?php   
        require_once('../conexao/conexao.php');
        $db_obj=new Conexao();
?>
<?php

    //pegando dados
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $bolsista_query     = "select  *,bolsista.id as id_bol from bolsista 
                           inner join atividade on (bolsista.id = atividade.fk_bolsista)    
                           where email='".$email."' and senha='".$senha."';";


    $coordenador_query  = "select   *   from coordenador    where email='".$email."' and senha='".$senha."';";
    
    
    
    $orientador_query   = "select   *   from orientador     where email='".$email."' and senha='".$senha."';";
    
    
    
    
    $conn=$db_obj->create();
    $db_obj->conectar($conn);

    //bolsista
    $result = $conn->query($bolsista_query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //tratar os dados;                   
            session_start();
                $_SESSION["nome"]       =   $row['nome'];
                $_SESSION["senha"]      =   $row['senha'];
                $_SESSION["email"]      =   $row['email'];
                $_SESSION["matricula"]  =   $row['matricula'];
                $_SESSION["cod_proj"]   =   $row['fk_projeto'];               
                $_SESSION["id"]         =   $row['id_bol'];         
                header('Location: ../view/bolsista.php');
        }
      
    }
    //ele pode ser um coordenador;
   
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
                $_SESSION["id"]  =   $row['id'];  
            header('Location: ../view/coordenador.php');
        }
    }
    //ele pode ser um orientador;            
    $result = $conn->query($orientador_query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //tratar os dados;
            session_start();
                $_SESSION["nome"]       =   $row['nome'];
                $_SESSION["senha"]      =   $row['senha'];
                $_SESSION["email"]      =   $row['email'];
                $_SESSION["matricula"]  =   $row['matricula'];
                $_SESSION["id"]  =   $row['id'];
                $_SESSION["cod_proj"]   =   $row['fk_Projeto_codigo'];    
            header('Location: ../view/orientador.php');
            }
    }else{
        echo "usuario indevido.";
    }    
    
?>