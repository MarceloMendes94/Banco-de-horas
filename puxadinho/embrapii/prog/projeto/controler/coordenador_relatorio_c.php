<?php
    require_once('../conexao/conexao.php');
    session_start();
?>

<?php
    function apresentacao(){
        $_POST["nome"];
        $titulo ='';  $descricao ='';     $coordenador ='';     $bolsistas ='';  
        $codigo_projeto=1;
        $sql_query="    select  Projeto.nome AS nome_projeto,
                                    Projeto.descricao AS descricao,
                                    CONCAT(Bolsista.nome,' ', Bolsista.sobrenome) AS nome_bolsista,                    
                                    CONCAT(Coordenador.nome,' ',Coordenador.sobrenome)AS nome_coor    
                                FROM Projeto 
                                INNER JOIN Bolsista ON Bolsista.fk_projeto_codigo =".$codigo_projeto."
                                INNER JOIN Coordenador ON Coordenador.fk_projeto_codigo =".$codigo_projeto."
                                WHERE Projeto.codigo =".$codigo_projeto.";";
        $db_obj=new Conexao();
        $conn=$db_obj->create();
        $db_obj->conectar($conn);
        $result = $conn->query($sql_query);  
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                $titulo      = $row["nome_projeto"];
                $descricao   = $row["descricao"];
                $coordenador = $row["nome_coor"];
                $bolsistas   = $bolsistas.$row["nome_bolsista"]."<br>";      
            }
        }else{
            echo "0 results";
        }
        $string_saida="
                <div class='card' id='cartao'> <h5 class='card-header'>".$titulo."</h5>
                    <div class='card-body'>
                        <h5>coordenador.</h5> <p>".utf8_encode($coordenador)."</p>
                        <h5>Bolsistas.</h5>   <p> ".utf8_encode($bolsistas) ."</p>
                        <h5>descrição.</h5>   <p>".utf8_encode($descricao)  ."</p>   
                    </div>
                </div>";
        echo $string_saida;
    }
?>

