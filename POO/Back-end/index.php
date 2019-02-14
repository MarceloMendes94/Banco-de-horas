<html>
    <head>


    </head>
    <body>

       <!--formularios
        <form action="" method='POST'>
        <h3> Fiador </h3>
            nome: <input type="text" name="nome_fiador">       
            <input type='submit' value='enviar' name="btn_fiador" >
        
        </form>
<br>
        <form action="" method="POST">
            <h3>Coordenador</h3>
            matricula:<input type="text" name="mat_coor"> 
            <br>    
            nome:<input type="text" name="nome_coor">  
            <br>
            sobrenome:<input type="text" name="snome_coor">  
            <br>
            <input type='submit' value='enviar' name="btn_coor" >

        </form>-->
<br>
        <form action="" method="POST">
            <h3>Bolsista</h3>
            matricula:<input type="text" name="mat_bol"> 
            <br>    
            nome:<input type="text" name="nome_bol">  
            <br>
            sobrenome:<input type="text" name="snome_bol">  
            <br>
            <input type='submit' value='enviar' name="btn_bol" >

        </form>
<br>
        <form action="" method="POST">
            <h3>Projeto</h3>
            nome:<input type="text" name="nome_proj"> 
            <br>    
            descricao:<input type="text" name="desc_proj">  
            <br>
            coordenador<input type="text" name="mat_coorp">  
            <br>
            Fiador<input type="text" name="fia_coor">  
            <br>
            <input type='submit' value='enviar' name="btn_proj" >

        </form>




        <?php
            require_once 'connection.php';
            /*
            if(isset($_POST['btn_fiador']) ){
                $nome=$_POST['nome_fiador'];   
                if($nome!=''){
                    Fiador_insert($nome);
                }   
                $nome='';// garantindo a não inserção multipla                  
            }
            
            if(isset($_POST['btn_coor']) ){
                $nome=$_POST['nome_coor'];
                $sobrenome=$_POST['snome_coor'];
                $mat=$_POST['mat_coor'];   
                if($nome!='' && $sobrenome!='' && $mat!=''){
                    Coordenador_insert($mat,$nome,$sobrenome);
                }   
                $nome='';
                $sobrenome='';
                $mat='';              
            }*/
            if(isset($_POST['btn_proj']) ){
                $nome   = $_POST['nome_proj'];
                $desc   = $_POST['desc_proj'];
                $mat    = $_POST['mat_coorp'];
                $fiador = $_POST['fia_coor'];
                if($nome!='' && $desc!='' && $mat!='' && $fiador!='' ){
                    Projeto_insert($nome, $desc, $mat, $fiador);
                }   
                $nome= '';
                $desc= '';
                $mat = '';
                $fiador = '';             
            }        

        ?>














    
       



    </body>
</html>