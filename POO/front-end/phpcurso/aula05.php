<?php
        #pegando valores via parametro
        $a=$_GET["a"];
        $b=$_GET["b"];
        $result = $a>$b ? " A é o maior valor" :" B é o maior valor" ;
        echo $result;
?>