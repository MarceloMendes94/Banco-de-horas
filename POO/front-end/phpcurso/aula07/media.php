<?php 
    # params via form
    $nota1=$_POST["n1"];
    $nota2=$_POST["n2"];
    $media=($nota1+$nota2)/2;
    echo "sua média é de $media";
    if($media>6){
        echo "você foi aprovado!!!";
    }else{
        echo "voce está de recuperção";
    }
?>