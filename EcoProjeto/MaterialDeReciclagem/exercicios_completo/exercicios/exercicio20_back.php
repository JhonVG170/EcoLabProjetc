<?php 
    if(isset($_REQUEST['enviar'])){
        $peso = floatval($_REQUEST['peso']);  
        $altura = floatval($_REQUEST['altura']);  

        $imc = $peso / ($altura * $altura); 

        if($imc < 18.5){
            echo "<h2>IMC: {$imc}<br>Você é Abaixo do peso<h2/>";
        }
        elseif($imc >= 18.5 and $imc < 25){
            echo "<h2>IMC: {$imc}<br>Você é Peso Normal<h2/>";
        }
        elseif($imc >= 25 and $imc < 30){
            echo "<h2>IMC: {$imc}<br>Você é Sobrepeso<h2/>";
        }
        elseif($imc >= 30 and $imc < 35){
            echo "<h2>IMC: {$imc}<br>Você é Obeso Leve<h2/>";
        }
        elseif($imc >= 35 and $imc < 40){
            echo "<h2>IMC: {$imc}<br>Você é Obeso Moderado<h2/>";
        }
        else{
            echo "<h2>IMC: {$imc}<br>Você é Obeso Mórbido<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>