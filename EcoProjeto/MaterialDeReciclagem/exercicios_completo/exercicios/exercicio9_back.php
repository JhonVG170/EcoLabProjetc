<?php 
    if(isset($_REQUEST['enviar'])){
        $x = floatval($_REQUEST['x']);
        $y = floatval($_REQUEST['y']);

        $dist = sqrt(($x * $x)+($y * $y));    

        echo "<h2>A distância entre {$x} e {$y} é de: {$dist}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>