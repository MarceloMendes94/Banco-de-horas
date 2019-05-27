<?php
require_once 'config.php';
class Connection extends Config{
   var $pdo;  
   
    function __construct() {
       $this->pdo= new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->senha);
   }
   
    function login_bolsista($email,$senha){
       $query="SELECT * FROM bolsista WHERE email = '$email' AND senha ='$senha' ;";
       $stmt = $this->pdo->prepare($query);
       $run = $stmt->execute();
       $result =$stmt->fetchAll();
       return $result;
    }
    function login_coordenador($email,$senha){
       $query="SELECT * FROM orientador WHERE email = '$email' AND senha ='$senha' ;";
       $stmt = $this->pdo->prepare($query);
       $run = $stmt->execute();
       $result =$stmt->fetchAll();
       return $result;
    }
    function login_polo($email,$senha){
       $query="SELECT * FROM coordenador WHERE email = '$email' AND senha ='$senha' ;";
       $stmt = $this->pdo->prepare($query);
       $run = $stmt->execute();
       $result =$stmt->fetchAll();
       return $result;
    }
    function codProjeto(){
        session_start();
        $fk = $_SESSION['fkey'];
        $query="SELECT DISTINCT(fk_projeto) FROM banco_horas_dev.atividade WHERE fk_bolsista=$fk;";
        $stmt = $this->pdo->prepare($query);
        $run = $stmt->execute();
        $result =$stmt->fetchAll();
        return $result[0]['fk_projeto'];        
    } 
    
    //atividades
    function inserir_atividade($desc,$inicio,$fim,$data,$fk_bol,$fk_proj){
        $query="INSERT INTO atividade (descricao, `data`, hora_inicio, hora_fim, validacao, fk_bolsista, fk_projeto)VALUES ('$desc'  , '$data', '$inicio' , '$fim'  , 0, $fk_bol ,$fk_proj );";
        echo $query;
        $stmt = $this->pdo->prepare($query);
        $run = $stmt->execute();
        $result =$stmt->fetchAll();
    }
    function visualizarAtividade($fk){
        $query  = "SELECT  descricao, DATE_FORMAT(`data`,'%d/%m/%Y') as dia, hora_inicio, hora_fim, validacao, TIMEDIFF( hora_fim,hora_inicio) as total FROM banco_horas_dev.atividade WHERE  fk_bolsista=$fk order by  DATE_FORMAT(`data`,'%Y'), DATE_FORMAT(`data`,'%m'),DATE_FORMAT(`data`,'%d');";
        $stmt   = $this->pdo->prepare($query);
        $run    = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;        
        
    }
    function mostrarAtividades($fk){
        $query  = "SELECT id, descricao, DATE_FORMAT(`data`,'%d/%m/%Y') as dia, hora_inicio, hora_fim, validacao, TIMEDIFF( hora_fim,hora_inicio) as total FROM banco_horas_dev.atividade WHERE  fk_bolsista=$fk order by  DATE_FORMAT(`data`,'%Y'), DATE_FORMAT(`data`,'%m'),DATE_FORMAT(`data`,'%d');";
        $stmt   = $this->pdo->prepare($query);
        $run    = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result; 
    }
    function alterarAtividade($id , $desc , $fim , $inicio , $data){
       $query=" UPDATE banco_horas_dev.atividade "
               . "SET descricao='".$desc."',"
               . "`data`='".$data."',"
               . "hora_inicio='".$inicio."',"
               . "hora_fim='".$fim."' "
               . "WHERE id=".$id.";";
        $stmt   = $this->pdo->prepare($query);
        $run    = $stmt->execute();
        $result = $stmt->fetchAll(); 
    }
    
    //função que prepara os dados para o orientador
    function mostrarAtividades_validar($fk){
        $query  = "SELECT id, descricao, DATE_FORMAT(`data`,'%d/%m/%Y') as dia, hora_inicio, hora_fim, validacao, TIMEDIFF( hora_fim,hora_inicio) as total"
                . "FROM       atividade "
                . "INNER JOIN projeto on (atividade.fk_projeto = projeto.id)"
                . "INNER JOIN orientador on (projeto.fk_orientador=orientador.id)"
                . "WHERE orientador.id=$fk"
                . "order by  DATE_FORMAT(`data`,'%Y'), DATE_FORMAT(`data`,'%m'),DATE_FORMAT(`data`,'%d');";
        $stmt   = $this->pdo->prepare($query);
        $run    = $stmt->execute();
        $result = $stmt->fetchAll();
        return $result; 
    }
}
   
    



