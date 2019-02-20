
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!--my code here --> 
      <h1>Banco de horas</h1>
      <br>      
      <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <h3>Login no banco de horas </h3>
                <br>
                <br>
                <form action="" method="post">
                  <div class="form-group">
                    <label for="in_mat">Matrícula</label>
                    <input type="text" class="form-control" id="in_mat" name="mat" aria-describedby="emailHelp" placeholder="matrícula" require="require">
                    <small id="mat_help" class="form-text text-muted">matrícula do sistema acadêmico.</small>
                  </div>
                  <div class="form-group">
                    <label for="in_senha">Senha</label>
                    <input type="password" name="pwd" class="form-control" id="in_senha" placeholder="senha" require="require">
                  </div>
                    <button type="submit" class="btn btn-primary" name="btn_login">Login</button>
                </form>
            </div>
        </div>    
      </div>
    <?php
      if(isset($_POST['btn_login']) ){
        require_once '../controller/i_login.php';          
          $mat=$_POST['mat'];
          $pwd=$_POST['pwd'];
          echo $mat.$pwd; 
          $auth=new Login(i_login::login($mat,$pwd) );
          
      }
       
    
    
    ?>
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


