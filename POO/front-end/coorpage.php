

<?php
session_start();
unset($_SESSION['projeto']);
$page="
<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <title>coordenador </title>
  </head>
  <body>
  <!--my code here --> 
      <h1> Banco de horas</h1>
      <br>
      <div class='row'>
          <div class='card-deck' style='max-height: 275px;'>
             
                <div class='card'>
                  <div class='card-body'>
                    <h5 class='card-title'>Inserir projeto</h5><br>
                    <p class='card-text'>Aqui é prossível inserir um projeto com seus respectivos dados.</p>
                      <br><br><br>
                    <a href='cadprojeto.html' class='btn btn-primary'>Inserir</a>
                  </div>
                </div>
          
                <div class='card'>
                  <div class='card-body'  style='height:500px'>
                    <h5 class='card-title'>Alterar projeto</h5><br>
                    <p class='card-text'>Nesta sessão pode alterar informações do projeto como por exemplo membros.</p>
                        <form action='altprojeto.php' method='post'>
                            <input type='text' class='form-control' name='cod_proj' placeholder='codigo do projeto' required='required'>
                            <br>
                            
                            <button type='submit' class='btn btn-primary'>Procurar</button>
                        </form>
                  </div>
                </div>
            

               
                <div class='card'>
                  <div class='card-body'>
                    <h5 class='card-title'>Consultar projeto</h5><br>
                    <p class='card-text'>Caso seja necessário vizualizar as atividades de um projeto o gerar relatórios.
                      </p>
                   <!-- <a href='#' class='btn btn-primary'>Go somewhere</a>-->
                      <form action='consprojeto.php' method='post'>
                            <input type='text' class='form-control' name='cod_proj' placeholder='codigo do projeto' required='required'>
                          <br>
                            <button type='submit' class='btn btn-primary'>Consultar</button>
                      </form>
                  </div>
                </div>
             

          
        </div>

     
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
  </body>
</html>";

echo $page;

?>
