<?php 
    if(isset($_REQUEST['enviar'])){
        $nome = $_REQUEST['nome'];
        $nota1 = floatval($_REQUEST['nota1']);
        $nota2 = floatval($_REQUEST['nota2']);
        $nota3 = floatval($_REQUEST['nota3']);

        $media_po = ((1*$nota1)+(2*$nota2)+(3*$nota3))/(1+2+3);    

        echo "<h2>A média ponderada da nota de {$nome} foi de: {$media_po}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>