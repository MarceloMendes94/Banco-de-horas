<?php
    Class Conexao{
        function create(){
            $conn = new mysqli("localhost", "root","","banco_horas_dev");
            return $conn;
        }

        
        function conectar($conn){
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        }
        
    }

