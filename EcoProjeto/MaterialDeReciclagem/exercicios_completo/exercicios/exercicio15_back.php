<?php 
    if(isset($_REQUEST['enviar'])){
        $sexo = $_REQUEST['sexo'];  

        if($sexo == 'M' or $sexo == 'm'){
            echo "<h2>Resposta: {$sexo}<br>MASCULINO<h2/>";
        }
        elseif($sexo == 'F' or $sexo == 'f'){
            echo "<h2>Resposta: {$sexo}<br>FEMININO<h2/>";
        }
        else{
            echo "<h2>Resposta: ''{$sexo}'' inválida<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>