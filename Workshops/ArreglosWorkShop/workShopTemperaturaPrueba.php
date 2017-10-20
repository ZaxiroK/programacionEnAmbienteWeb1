<?php 

$temperaturas = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$contBajas=0;
$contAltas=0;
$a = 5;
$b = 5;

$promedio = array_sum($temperaturas)/count($temperaturas);
 


arsort($temperaturas);

foreach($temperaturas as $value){
    if($a!=0){
        if($contAltas==0){
            $contAltas = $value.",";
        }else{
            $contAltas = $contAltas.$value.",";
        }
        
        $a=$a-1;
    }
}

asort($temperaturas);
foreach($temperaturas as $value ){
if($b!=0){

    if($contBajas==0){
$contBajas=$value.",";
    }else{
        $contBajas = $contBajas.$value.",";
    }
$b=$b-1;

}

}




echo "Temperaturas altas: $contAltas \n";
echo "Temperaturas altas: $contBajas \n";
echo "Promedio: $promedio";

?> 
