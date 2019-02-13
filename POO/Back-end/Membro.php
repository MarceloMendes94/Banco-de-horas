<?php
Class Membro{
    //atributos 
    var $matricula;
    var $nome;
    var $sobrenome;

        function mostrar_membro($membro){
            echo " $membro->matricula   $membro->nome   $membro->sobrenome";        
        }
    }
?>