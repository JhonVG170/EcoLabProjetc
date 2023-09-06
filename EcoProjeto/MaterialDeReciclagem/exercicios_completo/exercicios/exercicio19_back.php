<?php 
    if(isset($_REQUEST['enviar'])){
        $sexo = $_REQUEST['sexo'];  
        $altura = floatval($_REQUEST['altura']);  

        if($sexo == 'M' or $sexo == 'm'){
            $p_ideal = (72.7 * $altura) - 58;
            echo "<h2>Seu peso ideal é: {$p_ideal}<h2/>";
        }
        elseif($sexo == 'F' or $sexo == 'f'){
            $p_ideal = (62.1 * $altura) - 44.7;
            echo "<h2>Seu peso ideal é: {$p_ideal}<h2/>";        
        }
        else{
            echo "<h2>Resposta: ''{$sexo}'' inválida<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>