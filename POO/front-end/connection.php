<?php

// cria um connexão e retorna um objeto connection
function conexaoBanco(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banco_ic_horas";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}

/** 
 * recebe um obejto connection e uma valor para query
 * retorna com um string html 
 */
function queryapresentacao($conn,$codigo_projeto){
$sql_query="SELECT projeto.nome AS nome_projeto,
                   projeto.descicao AS descricao,
                   CONCAT(bolsista.nome,' ', bolsista.sobrenome) AS nome_bolsista,                    
                   CONCAT(coordenador.nome,' ',coordenador.sobrenome)AS nome_coor    
            FROM projeto 
            INNER JOIN bolsista ON bolsista.fk_projeto_codigo =".$codigo_projeto."
            INNER JOIN coordenador ON coordenador.fk_projeto_codigo =".$codigo_projeto."
            WHERE projeto.codigo =".$codigo_projeto.";";
    
$result = $conn->query($sql_query);

$titulo;
$descricao;
$coordenador;
$bolsistas=""; 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $titulo      = $row["nome_projeto"];
        $descricao   = $row["descricao"];
        $coordenador = $row["nome_coor"];
        $bolsistas   = $bolsistas.$row["nome_bolsista"]."<br>";       
        
    }
}    
$string_saida="
    <div class='row justify-content-center' style='background-color:#BFBFBF;'>
            <div class='col-5'>
                    <h1>".utf8_encode($titulo)."</h1>
                <br>
                  <h3>Coordenador:</h3><h5>".utf8_encode($coordenador)."</h5>
                <br>
                  <h3>bolsistas:</h3><h5>".utf8_encode($bolsistas)."</h5> 
                <br>
            </div>
            <div class='col-5'>
                <h1><br></h1>  
                  <h3>Descricao:</h3><h6>".utf8_encode($descricao)."</h6>                
            </div>
      </div>";
return $string_saida;        
}












?>