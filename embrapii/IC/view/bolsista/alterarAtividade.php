<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
        <title>        
            polo de invação
        </title>
         <!--bootstrap tags-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- meu estilo-->
        <link rel="stylesheet" href="../assets/estilo.css" type="text/css">
    </head>
    <body>
        <div class="container">
        <div class="row">
          <div class="col-sm">           
            <div class="card" style="width: 18rem; height: 100%;">
              <ul class="list-group list-group-flush">
                  <li class="list-group-item" id="top_menu">
                      <a href="../bolsista.php">
                        <img src="../assets/LOGO_horizontal.jpg" class="img-fluid" alt="Responsive image">
                      </a>
                      <br>                      
                  </li>
                <li class="list-group-item">
                    <!--pegando dados de cookie -->
                   <?php
                        session_start();
                     echo $_SESSION['titulo']."<br>". $_SESSION['nome']."<br>";
                   ?>
                    Alterar senha
                </li>
                <li class="list-group-item">sair</li>
              </ul>
            </div>            
          </div>
        </div> 
           
            <?php require_once '../../control/alteraratividade.php';
                  $alter = new Alterar();
                  echo $alter->fields;
            ?>
          
        </div>    
        
        
    </body>
</html>
