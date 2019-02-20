<?php
    
    require_once '../connection/c_login.php';
    
    interface i_login
    {
       // chamar metodos de conexão
       public  function  login($mat,$pwd);
    }
?>