<?php   
        require_once('../conexao/conexao.php');
        $db_obj=new Conexao();
        session_start();
        //echo $_SESSION["nome"].$_SESSION["senha"].$_SESSION["email"].$_SESSION["matricula"]. $_SESSION["cod_proj"];
?>
<?php //pegando dados
   
    $data   = $_POST["data"];
    $inicio = $_POST["inicio"];
    $fim    = $_POST["fim"];
    $desc   = $_POST["descricao"];
    $projeto= $_SESSION["cod_proj"];
    $mat    = $_SESSION["matricula"];

    $sql_query="insert into atividade( descricao , data , hora_inicio , hora_fim , fk_Projeto_codigo , fk_Bolsista_matricula )values('".utf8_encode($desc)."' , '".$data."' , '".$inicio."' ,  '".$fim."'  ,  ".$projeto."  , '".$mat."');";
    $conn   = $db_obj->create();//cirar con
    $db_obj->conectar($conn);//abre conn
    $result = $conn->query($sql_query); //executa query
    header('Location: ../view/bolsista.php');
?>