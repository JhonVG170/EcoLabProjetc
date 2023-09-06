<?php 
    if(isset($_REQUEST['enviar'])){
        $lado1 = floatval($_REQUEST['lado1']);
        $lado2 = floatval($_REQUEST['lado2']);

        $area = $lado1 * $lado2;

        echo "<h2>A área é de: {$area}m²<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>