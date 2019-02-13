<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $numero = isset($_POST["n1"]) ? $_POST["n1"] : 0;
            $operacao = isset($_POST["oper"]) ? $_POST["oper"] : 1;
            switch($operacao){
                case 1:
                    echo ($numero+$numero);
                break;
                
                case 2:
                    echo sqrt($numero);  
                break;
                
                case 3:
                    echo pow($numero,3);
                break;    
            }
        ?>
        
    </body>
</html>