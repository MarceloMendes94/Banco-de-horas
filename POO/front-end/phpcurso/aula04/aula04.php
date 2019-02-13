<?php
    #atividade de referência !!!
    /*
    $preco = 150.00;
    $desconto = 10/100;
    echo "preço do porduto custa $preco <br>";
    $preco -=($preco*$desconto) ;
    echo "com desconto o novo valor é de $preco";
    */
    $num1= 5;
    $num2 = &$num1;
    echo "os valores são $num1 e $num2 <br> ";
    $num2+=2;
    echo "os novos valores são $num1 e $num2 <br>";
    # recursividadde de variavel
    $var1= "marcelo";
    $$var1=" toma sorvete!";
    echo $var1.$$var1."<br>";
    echo $var1.$marcelo."<br>";

?>