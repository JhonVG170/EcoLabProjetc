<?php 
    if(isset($_REQUEST['enviar'])){
        $nome = $_REQUEST['nome'];
        $ano = floatval($_REQUEST['ano']);

        $dia = $ano * 365;      

        echo "<h2>{$nome}, você já viveu {$dia} dias<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>