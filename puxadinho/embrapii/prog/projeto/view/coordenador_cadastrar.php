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
                <div class="col-md-12 offset-md-0">
                        <div class="card" id="cartao">
                        <h5 class="card-header"><i class="fas fa-pencil-alt" style="width:30px;"></i>cadastrar projeto</h5>
                            <div class="card-body">
                                <form action="../controler/coordenador_cadastrar_c.php" method="POST">
                                    <h5><i class="fas fa-user-tie"      style="width:30px;"> </i>coordenador </h5> <br> 
                                    <!--    COORDENADOR  -->
                                    <div class="col-md-10 offset-md-1">                                    
                                        nome
                                        <input type="text" required class="form-control"  name="c_nome" >
                                        sobrenome<br>
                                        <input type="text" required class="form-control" name="c_snome" >
                                        email<br>
                                        <input type="email" required class="form-control" name="c_email">
                                        matricula<br>
                                        <input type="text" required class="form-control" name="c_mat">
                                    </div>
                                    <br>
                                    <h5> <i class="fas fa-user-friends" style="width:30px;" > </i>bolsistas</h5>    <br> 
                                    <!--    BOLSISTA  -->
                                    <div class="col-md-10 offset-md-1">
                                        <h5>Primeiro bolsista</h5>                                    
                                        nome
                                        <input type="text"  class="form-control" name="b1_nome">
                                        sobrenome<br>
                                        <input type="text"  class="form-control" name="b1_snome">
                                        email<br>
                                        <input type="email"  class="form-control" name="b1_email">
                                        matricula<br>
                                        <input type="text"  class="form-control"  name="b1_mat">
                                    </div>
                                    <br>
                                    <div class="col-md-10 offset-md-1">
                                        <h5>Segundo bolsista</h5>                                    
                                        nome
                                        <input type="text"  class="form-control" name="b2_nome">
                                        sobrenome<br>
                                        <input type="text"  class="form-control" name="b2_snome">
                                        email<br>
                                        <input type="email"  class="form-control" name="b2_email">
                                        matricula<br>
                                        <input type="text"  class="form-control" name="b2_mat">
                                    </div>
                                    <br>
                                    <!--    TITULO  -->
                                    <h5><i class="fas fa-paste"      style="width:30px;"> </i>Título do projeto</h5><br>
                                    <div class="col-md-10 offset-md-1">
                                        título
                                        <input type="text"  class="form-control" name="titulo" placeholder="informe o nome do projeto.">
                                    </div>
                                <br>
                                    <!--    DESCRIÇAO  -->
                                    <h5><i class="far fa-file-alt"      style="width:30px;"> </i>Descrição        </h5><br>   
                                    <div class="col-md-10 offset-md-1">
                                        descrição
                                        <input type="text"  class="form-control" name ="desc" placeholder="descreva o projeto de forma suncinta.">                                        
                                    </div>
                                    <br>
                                    <!--    FIADOR  -->
                                    <h5><i class="fas fa-money-bill-wave"  style="width:30px;"> </i>Fiador        </h5><br>   
                                    <div class="col-md-10 offset-md-1">
                                        código do fiador
                                        <input type="text"  class="form-control" name="fiador" >                                        
                                    </div>
                                    <br>
                                    <button type="submit"   class="btn btn-primary" > cadastrar projeto.</button>
                                </form>
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