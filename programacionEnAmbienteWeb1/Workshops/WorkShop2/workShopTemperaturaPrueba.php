<?php 

$temperaturas = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$tempBajas = array [];
$tempAltas = array [];
$promedio = array_sum($temperaturas)/count($temperaturas);
 

foreach($temperaturas as $key => $value){
    if($value>65){
        $tempBajas = $value;
    }else {
        $tempAltas = $value;
    }
}
echo $tempAltas;
echo $tempBajas;
echo $promedio;

?> 