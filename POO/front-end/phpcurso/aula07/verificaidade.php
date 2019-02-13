<html>
    <head>
        <title> form </title>
    </head>
    <body>
        <?php 
        $age = $_POST["idade"];
        if($age>=18){
            echo "você pode dirigir e deve votar";
        }else{
            if($age>=16){
                echo "você pode votar mas não pode dirigir";
            }else{
                echo "você não pode dirigir e nem votar";
            }
            
        }
        
        ?>
    </body>
</html>