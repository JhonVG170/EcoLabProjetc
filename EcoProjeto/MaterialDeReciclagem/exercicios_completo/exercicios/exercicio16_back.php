<?php 
    if(isset($_REQUEST['enviar'])){
        $ano = floatval($_REQUEST['ano']);  

        if($ano <= 2008){
            echo "<h2>Ano de nascimento: {$ano}<br>Você pode votar<h2/>";
        }
        else{
            echo "<h2>Ano de nascimento: {$ano}<br>Você não pode votar<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>