<?php
    require_once '../connection/connection.php';
    Class RelatorioController{
      // chamar metodos de conexão
    function RelatorioGeral($codigo_projeto){
        $aux=criar_tabela($codigo_projeto);
        return $aux;
        }
    }
    function RelatorioApresentacao($codigo_projeto){
        $aux=queryapresentacao($codigo_projeto);
        return $aux;
    }
    
?>