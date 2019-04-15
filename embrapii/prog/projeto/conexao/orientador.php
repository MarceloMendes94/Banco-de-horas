<?php 
    require_once('conexao.php');
    session_start();

    function VizualizarTarefas($matricula){
        echo $matricula;
        $db_obj=new Conexao();
        $conn   = $db_obj->create();//criar con
        $db_obj->conectar($conn);//abre conn
        $sql="  select * from projeto   INNER JOIN atividade ON (projeto.id = atividade.fk_projeto)
                                        INNER JOIN orientador ON (orientador.id = projeto.fk_orientador)  
                where '$matricula'= orientador.matricula;";                
        echo $sql;        
        $result = $conn->query($sql);   
        $saida = "" ;
        while($row = $result->fetch_assoc()) {
            if($row!=0){
                $saida = $saida. $row["descricao"]. $row["data"].$row["hora_inicio"].$row["hora_fim"]."<br>";
            }
            else{
                echo "sem atividades";
            }
        }
        echo $saida;
        return $saida;
    }
    
    function ValidarTarefas(){

    }
    function Exemple(){
        $result = $conn->query($sql_query); //executa query
        header('Location: ../view/bolsista.php');
    }
    
?>