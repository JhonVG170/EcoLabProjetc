<?php 
    if(isset($_REQUEST['enviar'])){
        $nome = $_REQUEST['nome'];  
        $sexo = $_REQUEST['sexo'];
        $idade = floatval($_REQUEST['idade']);    

        if($sexo == 'M' or $sexo == 'm'){
            echo "<h2>{$nome}, NÃO ACEITO, homem<h2/>";
        }
        elseif($sexo == 'F' or $sexo == 'f'){
            if($idade < 25){
                echo "<h2>{$nome}, ACEITA, cumpre os requisitos<h2/>";
            }
            else{
                echo "<h2>{$nome}, NÃO ACEITA, acima da idade<h2/>";
            }
        }
        else{
            echo "<h2>Resposta: ''{$sexo}'' inválida<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>