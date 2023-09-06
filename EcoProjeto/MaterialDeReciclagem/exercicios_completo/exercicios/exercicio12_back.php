<?php 
    if(isset($_REQUEST['enviar'])){
        $km = floatval($_REQUEST['km']);  
        $tempo = floatval($_REQUEST['tempo']);
        
        $velocidade_m = $km / $tempo;

        if($velocidade_m == 110){
            echo "<h2>{$velocidade_m} foi na média<h2/>";
        }
        elseif($velocidade_m > 110){
            echo "<h2>{$velocidade_m} foi acima da média<h2/>";
        }
        else{
            echo "<h2>{$velocidade_m} foi abaixo da média<h2/>";
        }
    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>