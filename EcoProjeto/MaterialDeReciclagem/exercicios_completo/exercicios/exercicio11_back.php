<?php 
    if(isset($_REQUEST['enviar'])){
        $idade = floatval($_REQUEST['idade']);  

        if($idade >= 18){
            echo "<h2>Idade: {$idade}<br>Você é maior de idade<h2/>";
        }
        else{
            echo "<h2>Idade: {$idade}<br>Você é menor de idade<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>