<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
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
                background-color:#F0F8FF;
                }
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
        </style>
    </head>
    <body >
        <div class="container-fluid">
            <!-- Content here -->
            <div class="row" id="header">
            <img src="../assets/embrapii-logo-horizontal-hc.png" alt="logo" class="rounded float-left" style="height:50px; margin:5px;" >
                <div style="color:#2363ad;margin:5px;font-size:40px;">banco de horas</div>
                <i id="sair" class="fas fa-sign-out-alt" ></i>
            </div>            
        </div>
       <br>
       <br>
       <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-0">
                        <div class="card" id="cartao">
                            <h5 class="card-header"><i class="fas fa-pencil-alt" style="margin:2px;"></i>cadastrar projeto</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    <i class="fas fa-user-tie"      style="width:25px;"> </i>coordenador  <br>   
                                    <i class="fas fa-user-friends"  style="width:25px;"> </i>bolsistas    <br> 
                                    <i class="far fa-file-alt"      style="width:25px;"> </i>Descrição    <br>   
                                    <i class="fas fa-paste"         style="width:25px;"> </i>Título do projeto
                                </p>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt " style="margin:2px;"></i>Cadastrar.
                                </a>
                            </div>
                        </div>
                    </div> 


                    <div class="col-md-3 offset-md-1">            
                        <div class="card"id="cartao">
                            <h5 class="card-header"> <i class="fas fa-sync-alt"   style="margin:2px;"></i> alterar projeto </h5>
                            <div class="card-body">                                
                                <p class="card-text">
                                    Inserir novos membros <br>
                                    Remover membro<br>
                                    <input type="text" class="form-control" placeholder="nome do projeto">
                                   
                                </p>

                                <a href="coordenador_alterar.php" class="btn btn-primary">
                                    <i class="fas fa-sync-alt"   style="margin:2px;"></i>Alterar Projeto.
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 offset-md-1">  
                        <div class="card" id="cartao">
                            <h5 class="card-header"> <i class="fas fa-book"   style="margin:2px;"></i> gerar relatório</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    Gerar relatório do projeto.<br>
                                    <input type="text" class="form-control" placeholder="nome do projeto.">
                                    
                                    <br>
                                </p>

                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-book"      style="margin:2px;"></i> Gerar relatório.
                                </a>
                            </div>
                        </div>
                    </div>    
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-0">
                        <div class="card" id="cartao">
                            <h5 class="card-header"><i class="fas fa-pencil-alt" style="margin:2px;"></i>cadastrar fiador</h5>
                            <div class="card-body">
                                <p class="card-text">
                                    nova empresa fiadora de projetos.<br> 
                                    <br>
                                    <br>
                                </p>
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-pencil-alt " style="margin:2px;"></i>Cadastrar
                                </a>
                            </div>
                        </div>
                    </div> 


                    <div class="col-md-3 offset-md-1">            
                        <div class="card"id="cartao">
                            <h5 class="card-header"> <i class="fa fa-search"  style="margin:2px;"></i>visualizar fiadores</h5>
                            <div class="card-body">                                
                                <p class="card-text">
                                    visualizar lsita de fiadores.<br>
                                    <br>
                                    <br>
                                    <br>
                                </p>

                                <a href="coordenador_visualizar_fiador.php" class="btn btn-primary">
                                    <i class="fa fa-search"   style="margin:2px;"></i>Alterar Projeto.
                                </a>
                            </div>
                        </div>
                    </div>


                      
            </div>
        </div>
     
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>