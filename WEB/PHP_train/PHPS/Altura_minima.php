<?php 

    $info = readline();
    $separation = explode(" ", $info);

    $Quant_toys = $separation[0];
    $Height = $separation[1];

    $Toys = readline();
    $Height_toys = explode(' ', $Toys);

    $count = 0;

    for ($i = 0; $i < $Quant_toys; $i++) {

        if ($Height >= $Height_toys[$i]){
            $count ++;
        }
    }
    echo $count;
?>