<?php
    require_once '../connection/connection.php';
    Class LoginController{
      // chamar metodos de conexão
      function autenticar($mat,$pwd){
        realizar_login($mat,$pwd);
      }
    }
    
?>