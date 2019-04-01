<?php 
    require_once('../conexao/conexao.php');
    $query= "select nome from Bolsista;";
    $obj= new Conexao();
    $myconn=$obj->create();
    $obj->conectar($myconn);

    $result = $myconn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //tratar os dados;
            echo $row['nome']."<br>";
        }
    }else{
        return "0 lines ARE RETURNED";
    }
?>