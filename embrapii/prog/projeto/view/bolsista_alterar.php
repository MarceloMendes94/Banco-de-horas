<?php include_once('../controler/bolsista_visualizar_c.php')?>
<!DOCTYPE html>
    <head>
        <meta name="description"content="banco de horas do polo de invação">
        <meta name="keywords"   content="polo de inovação, banco de horas, ifes, campus vitoria, fabrica de ideias, polo vitoria, ic, iniciação cientifica">
        <meta name="author"     content="marcelo mendes">
        <title>banco de horas</title>
        <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
        <!--bootstrap tags-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- icones-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!--meu estilo-->
        <style>
            body{
                background-color:#F0F8FF;}
            #sair{
                font-size:50px;
                color:white;
                margin:10px;
                position:fixed;
                top:0;
                right:0;
            }
            #header{
                background-color:#A3D4FA;
                box-shadow: 5px 5px 3px rgb(200,200,255);
            }
            #cartao{
                box-shadow: 5px 5px 3px rgb(200,200,255);

            }
            #sair{
                color: rgb(230,230,255);
                font-size:50px;
            } 
            td, th {  border: 2px solid rgb(50,50,50) ; } 
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row" id="header">
            <img src="../assets/embrapii-logo-horizontal-hc.png" alt="logo" class="rounded float-left" style="height:50px; margin:5px;" >
                <div style="color:#2363ad;margin:5px;font-size:40px;">banco de horas</div>        
            </div>            
        </div>     
        <br>
        <br>
        <div class="col-md-6 offset-md-3">
        <h5><i class="fas fa-undo-alt"></i> retornar</h5>   
            <div class="card" id="cartao" style="position:relative;">
                        <h5 class="card-header">Realizar login</h5>
                        <div class="card-body">
                            <p class="card-text">
                                <form action="../controler/bolsista_alterar_c.php" method="POST">
                                    <div class="col">
                                        <h5>código da tarefa </h5>
                                        <input type="text" name="codigo" required class="form-control">
                                    </div>    
                                    <div class="col">
                                        <h5>dia da atividade</h5>
                                        <input type="date" name="data" required class="form-control" >
                                    </div>
                                    <div class="col">
                                        <h5>hora de inicio</h5>
                                         <input type="time" name="inicio" required class="form-control">
                                    </div>  
                                    <div class="col">
                                        <h5>hora de término</h5>
                                        <input type="time" name="fim"  required class="form-control">
                                    </div>   
                                    <div class="col">
                                        <h5>Descrição da tarefa.</h5>
                                        <input type="text" class="form-control" required name="descricao" placeholder="descrição da atividade"> 
                                    </div> 
                                    <br>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Alterar.</button>
                                    </div>
                                </form>
                            </p>                                
                        </div>
            </div>
            <br><br>
            <h4> Tarefas</h4>
            <?php echo $tabela ?>      
    </body>
</html>