<!DOCTYPE html>
<html>
 <head>
   <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
   <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <title>banco de horas</title>
    
 </head>
<style>
   @import url('https://fonts.googleapis.com/css?family=Open+Sans');
   /*cabeçalho*/
   body{
      margin:0px;
   }
   header{
      position:relative;
      width:100%;
      height:100px;
   }
   header img{
      position:relative;
      margin:10px;
   }
   header label{
      color:#3232ff;
      position:relative;
      top:-100px;
      left:100px;
      font-family: 'Open Sans', sans-serif;
   }
   /*corpo*/
   form{
      position:relative;
      top :50px;
      left:35%;
      background-color: #D3D3D3;
      box-shadow: 5px 7px #C0C0C0;
      height:300px;
      width:30%;
      border-radius:5px;
   }
   form  h1{
      color:#3232ff;
      position:relative;
      width:60%;
      left:25%;
      top:20px;  
      font-family: 'Open Sans', sans-serif; 
      margin-bottom:50px;  
   }
   form label{
      position:relative;
      left:10px;
      margin:10px;
      width:50px;
      display:inline-block;
   }
   #button{
      position:relative;
      top:20px;
      left:38%;
      width:20%;
      
   }
   
   
</style>
 <body>
   
   <header>
         <img src="../assets/logo" alt="Logo" height="80" width="80">
       <label>
            <h1>Banco de horas </h1>
        </label>
   </header>
   
   <section>
      <form ation="" method="get">
         
         <h1>Fazer login</h1>
         
         
         <label> login: </label> <input type="text"     placeholder="matrícula do sistema acadêmico." name="login"><br>

         <label> senha: </label> <input type="password" placeholder="password"                        name="pwd"  ><br>

         <input id="button" type="submit" name="btn-login" value="login" >

      </form>
   </section>
  <!-- <footer>
   Desenvolvido por Marcelo Passamai Mendes em projeto junto a CAPES para o polo de inovação.
   </footer>-->
<?php
if(isset($_GET['btn-login'])){
  // get values  and try auth;
}


?>   

</body>
</html>
