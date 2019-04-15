<?php
    require_once('../conexao/conexao.php');
    $db_obj=new Conexao();
    session_start(); 
    $projeto= $_SESSION["cod_proj"];
    $mat    = $_SESSION["matricula"];
    $sql_query="select  atividade.descricao     as descricao,   
                        DATE_FORMAT(atividade.data          , '%d/%m/%Y')           as data ,
                        TIME_FORMAT(atividade.hora_inicio   , '%H:%i')              as hora_inicio,
                        TIME_FORMAT(atividade.hora_fim      , '%H:%i')              as hora_fim,
                        TIME_FORMAT(TIMEDIFF(hora_fim, hora_inicio) , '%H:%i')      as total,
                        atividade.validacao                                                as validacao
                from atividade        
                inner join bolsista on (bolsista.id = atividade.fk_bolsista)
                where bolsista.matricula = '".$mat."'  order by DATE_FORMAT(atividade.data , '%m') "; 
?>
    <?php //pegando dados e apresentando
        $conn   = $db_obj->create();
        $db_obj->conectar($conn);
        mysqli_set_charset($conn,"utf8");
        $result = $conn->query($sql_query); 
        $tabela="<table><tr> <th>Descrição </th> <th>Dia da atividade.</th><th>Hora do início. </th><th>Hora do Fim. </th> <th>total</th> <th>validação</th> </tr>" ;
        $validacao='';
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["validacao"]==1 ){
                    $validacao="sim";
                }
                else{
                    $validacao="não";
                }
                $tabela=$tabela."<tr>
                                    <th>".$row["descricao"].            "</th>
                                    <th>".$row["data"].                 "</th> 
                                    <th>".$row["hora_inicio"].          "</th>
                                    <th>".$row["hora_fim"].             "</th>
                                    <th>".$row["total"].                "</th>                                    
                                    <th>".$validacao.                   "</th>     
                                </tr>";
            }
        }  
        
        
        $tabela=$tabela."</tabela>";
    ?>