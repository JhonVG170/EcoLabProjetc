<?php 
    if(isset($_REQUEST['enviar'])){
        $x = floatval($_REQUEST['x']);  
        $y = floatval($_REQUEST['y']);  
        $z = floatval($_REQUEST['z']); 
        
        $xy = $x + $y;
        $xz = $x + $z;
        $yz = $y + $z;

        if($xy > $z){
            if($xz > $y){
                if($yz > $x){
                    echo "<h2>Forma um triângulo<br>(x + y > z) ou ({$xy} > {$z})<br>(x + z > y) ou ({$xz} > {$y})<br>(y + z > x) ou ({$yz} > {$x})<h2/>";
                }
                else{
                    echo "<h2>Não forma um triângulo, (y + z <= x) ou ({$yz} <= {$x})<h2/>";
                }
            }
            else{
                echo "<h2>Não forma um triângulo, (x + z <= y) ou ({$xz} <= {$y})<h2/>";
            }
        }
        else{
            echo "<h2>Não forma um triângulo, (x + y <= z) ou ({$xy} <= {$z})<h2/>";
        }

    }
    else{
        echo "Você deve informar os valores no front-end";
    }
?>