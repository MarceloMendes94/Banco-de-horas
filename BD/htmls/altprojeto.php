<?php 
$codigo_projeto = $_POST['cod_proj']; 
$sql_query="SELECT projeto.nome AS nome_projeto,
                   projeto.descicao AS descricao,
                   CONCAT(bolsista.nome,' ', bolsista.sobrenome) AS nome_bolsista,                    
                   CONCAT(coordenador.nome,' ',coordenador.sobrenome)AS nome_coor    
            FROM projeto 
            INNER JOIN bolsista ON bolsista.fk_projeto_codigo =".$codigo_projeto."
            INNER JOIN coordenador ON coordenador.fk_projeto_codigo =".$codigo_projeto."
            WHERE projeto.codigo =".$codigo_projeto.";";
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

$conn=conexaoBanco();
$result = $conn->query($sql_query);

echo $sql_query."<br><br><br><br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo utf8_encode( $row["nome_projeto"] ." ". $row["nome_bolsista"]." ".$row["nome_coor"] ."<br>");
    }
}
?>