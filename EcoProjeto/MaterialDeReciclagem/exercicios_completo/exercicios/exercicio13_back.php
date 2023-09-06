<?php 
    if(isset($_REQUEST['enviar'])){
        $temperatura = floatval($_REQUEST['temperatura']);  

        if($temperatura >= 36.5){
            echo "<h2>Temperatura: {$temperatura}<br>ESTÁ COM FEBRE<h2/>";
        }
        else{
            echo "<h2>Temperatura: {$temperatura}<br>NÃO ESTÁ COM FEBRE<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>