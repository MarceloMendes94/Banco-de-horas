<?php
// fazendo biscoitos 

include '../back-end/connection.php'; 
session_start();
if(isset($_POST['cod_proj'])!=NULL  ){  
  $_SESSION['projeto']=$_POST['cod_proj'];  
}
?>


<?php  
$conn = conexaoBanco();
$apresentacao = queryapresentacao($conn,$_SESSION['projeto']);


$page_code="<!doctype html>
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
    
    ".$apresentacao."
    
    <!--formularios-->  
         <div class='row justify-content-center'>
            <div class='col-4'>
                    <h2>inserir membro</h2>
                    <form action='' method='post'>
                        <label>nome</label>
                        <input type='text' class='form-control'   name='nome_bolsista'      required='required' placeholder='nome' style='width:300px;'>
                        <br>
                        <label>sobrenome</label>
                        <input type='text' class='form-control'   name='sobrenome_bolsista' required='required' placeholder='sobrenome' style='width:300px;'>
                        <br>
                        <label>matricula</label>
                        <input type='text' class='form-control'  name='matricula_bolsista'  required='required' placeholder='matricula' style='width:300px;'>
                        <br>
                        <button class='btn btn-primary' type='submit' name='inserir_bolsista' >Inserir</button>
                    </form>    
            </div>
            <div class='col-4'>
                <h2>remover membro</h2>  
                 <form>
                 <br>
                    <label>nome</label>
                    <input type='text' class='form-control' id='inputMat'  placeholder='matricula' style='width:300px;'>
                    <br>
                    <button class='btn btn-primary' type='submit' onclick='marcelo()'>Inserir</button>
                </form>  
                                        
            </div>
      </div>
      <!-- Optional JavaScript -->
   
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
  </body>
</html>
";
echo html_entity_decode($page_code);

?>

<?php
if(isset($_POST['inserir_bolsista']) ){
  $nome_bolsista      = '';
  $matricula_bolsista = '';
  $sobrenome_bolsista = '';
  $nome_bolsista  = $_POST['nome_bolsista'];
  $matricula_bolsista= $_POST['matricula_bolsista'];
  $sobrenome_bolsista= $_POST['sobrenome_bolsista'];
  if($nome_bolsista!='' && $matricula_bolsista!='' && $sobrenome_bolsista!=''){
    Bolsista_insert($nome_bolsista,$matricula_bolsista,$sobrenome_bolsista,$_SESSION['projeto']); 
    $nome_bolsista      = '';
    $matricula_bolsista = '';
    $sobrenome_bolsista = '';
  }  
}


?>