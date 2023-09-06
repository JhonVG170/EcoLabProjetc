<?php 
    if(isset($_REQUEST['enviar'])){
        $qtd_paes = floatval($_REQUEST['qtd_paes']);
        $valor_paes = floatval($_REQUEST['valor_paes']);
        $qtd_broas = floatval($_REQUEST['qtd_broas']);
        $valor_broas = floatval($_REQUEST['valor_broas']);

        $venda_paes = $qtd_paes * $valor_paes;
        $venda_broas = $qtd_broas * $valor_broas;
        $vendas_total =  $venda_paes + $venda_broas;
        $poupar = ($vendas_total * 10)/100;

        echo "<h2>O valor arrecadado com pães: {$venda_paes}<h2/>";
        echo "<h2>O valor arrecadado com broas: {$venda_broas}<h2/>";
        echo "<h2>O valor arrecadado com total: {$vendas_total}<h2/>";
        echo "<h2>O valor a ser poupado é de: {$poupar}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>