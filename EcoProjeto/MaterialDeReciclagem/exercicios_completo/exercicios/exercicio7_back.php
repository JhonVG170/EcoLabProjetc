<?php 
    if(isset($_REQUEST['enviar'])){
        $peso = floatval($_REQUEST['peso']);

        $preco = $peso * 32;      

        echo "<h2>O valor a pagar é de RS{$preco}<h2/>";

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>