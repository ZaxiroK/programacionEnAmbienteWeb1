<?php 

$arregloTemperaturas = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$arregloBajas= array();
$arregloAltas= array();
$contadorBajas = 0;
$contadorAltas = 0;
$bajas;
$altas;

$promedio = array_sum($arregloTemperaturas)/count($arregloTemperaturas);
 

sort($arregloTemperaturas);
    foreach($arregloTemperaturas as $value){
        if($contadorBajas!=5){
            array_push($arregloBajas, $value);
            
            $contadorBajas=$contadorBajas+1;

    } 
}

arsort($arregloTemperaturas);

    foreach($arregloTemperaturas as $value){
    if($contadorAltas!=5){
    
        array_push($arregloAltas, $value);
    
    
    $contadorAltas=$contadorAltas+1;
}
}
echo "Temperaturas altas:";
print_r($arregloAltas);
echo "Temperaturas bajas:";
print_r($arregloBajas);

//echo "Temperaturas altas: $arregloAltas \n";
//echo "Temperaturas bajas: $arregloBajas  \n";
echo "Promedio: $promedio";
