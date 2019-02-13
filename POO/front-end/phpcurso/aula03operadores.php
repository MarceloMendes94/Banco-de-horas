<!--aula 05 do curso -->
<?php 
    $n1 = 4;
    $n2 = 2;


    echo "a soma de $n1 + $n2 é ".($n1+$n2)."<br>" ;    
    echo "a subtracao de $n1 - $n2 é ".($n1-$n2)."<br>";
    echo "a divisão de $n1 por $n2 é ".($n1/$n2)."<br>";
    echo "o resto da divisão de $n1 por $n2 é ".($n1%$n2)."<br>";

    /*echo "<br> <br>";
    $n3=0;
    $n4=0;
    $n3=$_GET["a"];
    $n4=$_GET["b"];
    echo "a soma dos valores passados nos parametros é de ".($n3+$n4);*/
    //funções matematicas 
    echo "<br> <br>";
    echo "<h2>valores padrão $n1 e $n2</h2>"; 
    echo "potencia $n1<sup>$n2</sup> = ".pow($n1,$n2);
?>