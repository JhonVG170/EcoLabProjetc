<?php 
    if(isset($_REQUEST['enviar'])){
        $acre = floatval($_REQUEST['acre']);
        $desc = floatval($_REQUEST['desc']);

        $primeiro = $acre * 1.3;
        $segundo = $desc * 0.75;

        echo "<h2>O valor de {$acre} com o acréscimo de 30% é = {$primeiro}<h2/>";
        echo "<h2>O valor de {$desc} com o desconto de 25% é = {$segundo}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>