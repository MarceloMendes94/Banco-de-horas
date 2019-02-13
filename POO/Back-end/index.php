<html>
    <head>


    </head>
    <body>
        <?php
            require_once 'Bolsista.php';

            $membro=new Membro;
            $membro->nome="marcelo";
            $membro->sobrenome="mendes";
            $membro->matricula="20151bsi0436";

            $membro->mostrar_membro($membro);
        
        ?>



    </body>
</html>