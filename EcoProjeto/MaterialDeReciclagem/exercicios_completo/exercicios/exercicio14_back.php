<?php 
    if(isset($_REQUEST['enviar'])){
        $idade = floatval($_REQUEST['idade']);  

        if($idade >= 18){
            if($idade <= 65){
                echo "<h2>Idade: {$idade}<br>Você está entre 18 e 65 anos<h2/>";
            }
            else{
                echo "<h2>Idade: {$idade}<br>Você está acima de 65 anos<h2/>";  
            }
        }
        else{
            echo "<h2>Idade: {$idade}<br>Você está abaixo de 18 anos<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>