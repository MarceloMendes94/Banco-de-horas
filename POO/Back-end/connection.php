<?php
//imports
require_once 'Fiador.php';
require_once 'Coordenador.php';
require_once 'Membro.php';
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

/**
 *  insert
 */
Function Fiador_insert($nome){
    $codigo=0;
    //pegar a conexao com banco 
    $conn=conexaoBanco();
    
    //cria objeto
    $fiador=new Fiador($codigo,$nome);
    //query

    $query="INSERT INTO fiador (nome) values ('". $fiador->getNome()."');";
     echo $query;

    //pegar registros
    $result = $conn->query($query);       
}

Function Coordenador_insert($m,$n,$s){
    //para ter um projeto precisa ter um coordenador não pode ter um coordenador sem ter projeto
    /* soluççao inserir um projeto 0 desalocado
    insert into fiador(codigo,nome)values (0,'vazio');
    insert into projeto (codigo,nome,descicao,fk_fiador_codigo)values(0,'desalocado','sem projeto atualmente',0);
    */
    $conn=conexaoBanco();
    $projeto=0;
    $coor= new Coordenador($m,$n,$s,$projeto);
    $query="INSERT INTO coordenador (matricula,nome,sobrenome,fk_projeto_codigo) values (' "
    .$coor->getMatricula().
    " ' , ' " .$coor->getNome().
    " ' , ' " .$coor->getSobrenome().
    "  ' ,  " .$coor->getProjeto().");";
    //echo $query;
    $result = $conn->query($query);
}

Function Projeto_insert($nome , $desc , $mat , $fiador){
    $conn=conexaoBanco();
    //preciso pegar numeros de registros
    $query="insert into projeto";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $codigo = $row["total"]+1;
        }
    }
    
    

}








?>