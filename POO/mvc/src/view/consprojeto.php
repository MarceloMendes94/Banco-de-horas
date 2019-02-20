<?php
include '../back-end/connection.php'; 

$codigo_projeto = $_POST['cod_proj']; 
$sql_query="SELECT  bolsista.nome AS nomeB,
                            atividade.descricao AS ativ,
                            atividade.data AS data,
                            TIMEDIFF (atividade.hora_fim , atividade.hora_inicio  )AS tempo
                    FROM atividade
                        INNER JOIN  bolsista ON atividade.fk_bolsista_matricula = bolsista.matricula
                        INNER JOIN projeto ON atividade.fk_projeto_codigo=projeto.codigo
                        WHERE projeto.codigo=$codigo_projeto 
                        ORDER BY nomeB; ";

$conn=conexaoBanco();
$result = $conn->query($sql_query);
$tabela="
        <style>
        table{
            border:1px solid black;
        }
        tr{
            border:1px solid black;
        }
        th{
            border:1px solid black;
        }
        </style>    
        <table>       
        <tr>
            <th> Nome do bolsista</th>
            <th> Atividade feita </th>
            <th> dia             </th>
            <th> tempo gasto     </th>
        </tr>";            
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tabela=$tabela."<tr>
                <th>".utf8_encode($row["nomeB"])."</th>
                <th>".utf8_encode($row["ativ"])."</th>
                <th>".utf8_encode($row["data"])."</th>
                <th>".utf8_encode($row["tempo"])."</th> </tr>";
    }
}
$tabela=$tabela."</table>";
//
$sql_query="SELECT projeto.nome AS nome_projeto,
                   projeto.descricao AS descricao,
                   CONCAT(bolsista.nome,' ', bolsista.sobrenome) AS nome_bolsista,                    
                   CONCAT(coordenador.nome,' ',coordenador.sobrenome)AS nome_coor    
            FROM projeto 
            INNER JOIN bolsista ON bolsista.fk_projeto_codigo =".$codigo_projeto."
            INNER JOIN coordenador ON coordenador.fk_projeto_codigo =".$codigo_projeto."
            WHERE projeto.codigo =".$codigo_projeto.";";
$result = $conn->query($sql_query);

$titulo="";
$descricao="";
$coordenador="";
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
//variaveis pegas 

echo html_entity_decode("
<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
   
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <title>Alterar projeto</title>
  </head>
  <body>
  <h1>Banco de horas</h1>
  
  <!--apresentação-->
  
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
      </div>
      <br><br>
     <!--tabela-->  
         <div class='row justify-content-center'>
            ".$tabela."
      </div>
      <input class='btn btn-primary' type='submit' onclick='gerarPDF()' value='Gerar PDF'>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
  </body>
</html>
");




?>