<?php 
    if(isset($_REQUEST['enviar'])){
        $acre = floatval($_REQUEST['acre']);

        $primeiro = $acre * 1.15;

        echo "<h2>O valor de {$acre} com o acréscimo de 15% é = {$primeiro}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>