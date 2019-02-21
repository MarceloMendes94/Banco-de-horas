<?php
    include '../controller/relatoriocontroller.php'; 
    if ($_POST['cod_proj']){
        $codigo_projeto = $_POST['cod_proj']; 
        session_start();
        $_session['projeto']=$codigo_projeto;
    }else{
        $codigo_projeto = $_session['projeto'];
    }

//tabela do projeto
$obj = new RelatorioController();
$tabela = $obj->RelatorioGeral($codigo_projeto); 
$apresentacao = $obj->RelatorioApresentacao($codigo_projeto);
?>
 


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
     <?php echo $apresentacao ?>
      <br><br>
     <!--tabela-->  
         <div class='row justify-content-center'>
            <?php echo $tabela?>
      </div>
      <input class='btn btn-primary' type='submit' onclick='gerarPDF()' value='Gerar PDF'>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
  </body>
</html>