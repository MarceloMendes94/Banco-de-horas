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


 /**
 *  documentação 
 *      exemplo de codigo
 *          require_once '../conexao/conexao.php';
 *          $con = new conexao();
 *          $con->conectar();
 *          $result = $conn->query($query);
 *          if ($result->num_rows > 0) {
 *              while($row = $result->fetch_assoc()) {
 *                  //tratar os dados;
 *              }
 *          }else{
 *              return "0 lines ARE RETURNED";
 *          }
 * 
 *  */
	?>
