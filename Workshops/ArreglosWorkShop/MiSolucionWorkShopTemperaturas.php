<?php 

$arregloTemperaturas = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$arregloBajas= array();
$arregloAltas= array();
$contadorBajas = 0;
$contadorAltas = 0;

$promedio = array_sum($arregloTemperaturas)/count($arregloTemperaturas);
 

arsort($arregloTemperaturas);
//necesito saber como hacer un punto lenght para la comparacion
foreach($arregloTemperaturas as $value){
    if($contadorAltas!=5){
        //como meter un valor a un arreglo .push?
            $arregloAltas = $value;
        
        
        $contadorAltas=$contadorAltas+1;
    }
}

asort($arregloTemperaturas);
foreach($arregloTemperaturas as $value ){
if($contadorBajas!=5){

    
        $arregloBajas = $value;
    
    $contadorBajas=$contadorBajas+1;

}

}


echo "Temperaturas altas: $arregloAltas \n";
echo "Temperaturas altas: $arregloBajas \n";
echo "Promedio: $promedio";

?> 
