<?php
    require_once '../connection/factoryConn.php';
    //cookies
    session_start();
    $fk     = $_SESSION['fkey'];
    $_SESSION['tabela']="";
            
    $conn = new Connection();
    $dados=$conn->mostrarAtividades_Coordenador($fk);
    $i=0;
    $tam = sizeof($dados);
    $table ="<table>";
    $table =$table."<tr> <td>data</td>  <td>descrição</td>   <td>hora inicio</td>   <td>hora fim</td> <td>total de horas</td><td>validado</td>  </tr>";

    
    for ($i=0 ; $i<$tam ; $i++){
        $linha=$dados[$i];
        $val='';
        if ($linha["validacao"]==1){
            $val="<i class='fas fa-check'></i>";
        }else{
           $val= "<i class='far fa-times-circle' ></i>";
        } 
        $table = $table ."<tr>";
        $table = $table ."<td id='col_1'>".$linha["dia"]                    ."</td>";        
        $table = $table ."<td id='col_2'>". utf8_encode($linha["descricao"])."</td>";        
        $table = $table ."<td id='col_3'>".$linha["hora_inicio"]            ."</td>";
        $table = $table ."<td id='col_4'>".$linha["hora_fim"]               ."</td>";
        $table = $table ."<td id='col_5'>".$linha["total"]                  ."</td>";
        $table = $table ."<td id='col_6'>".$val                             ."</td>";
        $table = $table ."</tr>"; 
       
    }
    $table =$table."</table>";
    $_SESSION['tabela']=$table;
    header ("location: ../view/coordenador/visualizar.php");

