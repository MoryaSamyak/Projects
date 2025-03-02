<?php 

    $Max_capacity = readline("");
    $Quant_student = readline("");

    $Quant_travel = $Quant_student/($Max_capacity-1);

    echo ceil($Quant_travel);


?>