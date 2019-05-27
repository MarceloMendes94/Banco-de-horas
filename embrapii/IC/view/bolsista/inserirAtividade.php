<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
        <br>
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
            <!--  card 1   -->
            <div class="col-sm">
                <div class="card">
                <h5 class="card-header">Inserir Atividade</h5>
                <div class="card-body">
                  <p class="card-text">
                  <form name="envio_tarefa" action="../../control/inserirAtividade.php" method="get">
                      <label> data </label>
                      <input type="date"name="data" required><br>
                      <label> hora de inicio </label>
                      <input type="time"name="inicio" required><br>
                      <label> hora fim </label>
                      <input type="time"name="fim"  required><br>
                      <label> descricao</label>
                      <input type="text" name="desc" required>
                  </p>
                  <button  type="submit" class="btn btn-primary" onclick="validar()" >Inserir atividade.</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        </div>
        <script language="javascript" type="text/javascript">
            function validar(){
                var data        = envio_tarefa.data.value;
                var inicio      = envio_tarefa.inicio.value;
                var fim         = envio_tarefa.fim.value;
                var descricao   = envio_tarefa.desc.value;
                if (descricao!='' || fim!='' || inicio!='' || data!=''){
                    var hoje = new Date();
                    if(hoje<=data){
                        alert("atividade sendo inserida");
                    }else{
                        document.getElementsByName("data").value='';
                    }
                }                
            }
        </script>
    </body>
</html>
