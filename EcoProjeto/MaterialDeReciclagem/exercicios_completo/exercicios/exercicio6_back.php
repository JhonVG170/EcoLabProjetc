<?php 
    if(isset($_REQUEST['enviar'])){
        $reais = floatval($_REQUEST['reais']);
        $preco = floatval($_REQUEST['preco']);

        $qtd_litros = $reais / $preco;      

        echo "<h2>Com RS{$reais} da para comprar {$qtd_litros} litros de gasolina<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>