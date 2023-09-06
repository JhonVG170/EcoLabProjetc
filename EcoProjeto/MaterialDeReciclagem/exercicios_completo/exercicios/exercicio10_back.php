<?php 
    if(isset($_REQUEST['enviar'])){
        $salario = floatval($_REQUEST['salario']);

        $aumen = $salario * 1.15;
        $total = $aumen * 0.92;   

        echo "<h2>Salário inicial: {$salario}<br>Salário com o aumento: {$aumen}<br>Salário final: {$total}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>