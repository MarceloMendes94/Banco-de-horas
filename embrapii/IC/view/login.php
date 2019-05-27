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
        <link rel="stylesheet" href="assets/estilo.css" type="text/css">
    </head>
    <body>
        <br>
        <div class="container">
             <div class="row" height="500" >
                 <div class="col-sm offset-md-4">
                    <div class="card" style="width: 18rem;">
                         <div class="card-body" >
                            <form method="POST" action="../control/login.php" name='login_form' id="login_form">
                                <img src="assets/LOGO_vertical.jpg" id="logo_login" width="200" class="img-fluid" alt="Responsive image"><br>
                                <label>informe seu email</label><br>
                                <input type="email" name="email"><br>
                                <label>senha</label><br>
                                <input type="password" name="senha"><br><br>
                                <input type="submit" value="login" name="login" id="login">
                            </form>
                         </div>    
                     </div>
                 </div>
             </div>           
         </div>         
        <br>
        
        <!-- design-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="footer_box">
                            <br>
                            Endereço: Av. Vitória, 1449 - Jucutuquara, Vitória - ES, 29040-780<br><br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.7086421098265!2d-40.3232064853959!3d-20.312323555556393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb83d79ff874725%3A0xfb79feaa4a19500e!2sIfes+-+Polo+de+Inova%C3%A7%C3%A3o+Vit%C3%B3ria!5e0!3m2!1spt-BR!2sbr!4v1558184603903!5m2!1spt-BR!2sbr" width="95%" height="170px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>    
                    </div>
                    <div class="col-sm">
                        <div class="footer_box">
                            <br>
                            email: polodeinovacao@ifes.edu.br<br>
                            Telefone: 27 3331-2276<br> 
                            <a href="https://polo.ifes.edu.br/index.php/o-polo-embrapii-ifes">Polo de inovação Vitória</a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="footer_box">
                            <br>
                            <a href="https://embrapii.org.br/">Embrapii</a><br>
                            <a href="https://embrapii.org.br/areas-atuacao/">Áreas de autação</a>
                        </div>    
                    </div>
                </div>
           </div>
        </footer>
    </body>
</html>
