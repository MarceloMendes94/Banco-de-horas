<?php //pegando dados do form
    $nome_coor  = $_POST["c_nome"];
    $snome_coor = $_POST["c_snome"];
    $email_coor = $_POST["c_email"];
    $mat_coor   = $_POST["c_mat"];
    $nome_b1  = $_POST["b1_nome"];
    $snome_b1 = $_POST["b1_snome"];
    $email_b1 = $_POST["b1_email"];
    $mat_b1   = $_POST["b1_mat"];
    $nome_b2  = $_POST["b2_nome"];
    $snome_b2 = $_POST["b2_snome"];
    $email_b2 = $_POST["b2_email"];
    $mat_b2   = $_POST["b2_mat"];
    $tit      = $_POST["titulo"];
    $desc     = $_POST["desc"];
    $fiador   = $_POST["fiador"];
?>
<?php   
        require_once('../conexao/conexao.php');
        $db_obj=new Conexao();
        $conn   = $db_obj->create();//criar con
        $db_obj->conectar($conn);//abre conn   
?>
<?php
    //inserindo projeto
    $sql_query="insert into Projeto(nome,descricao,fk_fiador_codigo)values('".$tit."','".$desc."',".$fiador.");";
    echo $sql_query;
    //$result = $conn->query($sql_query); //executa query
?>
<?php
    //inserindo coordenador
    $sql_query=inser"";
    echo $sql_query;
    //$result = $conn->query($sql_query); //executa query
?>
<?php
    //inserindo bolsista1
    $sql_query="";
    echo $sql_query;
    //$result = $conn->query($sql_query); //executa query
?>
<?php
    //inserindo bolsista2
    $sql_query="";
    echo $sql_query;
    //$result = $conn->query($sql_query); //executa query
?>