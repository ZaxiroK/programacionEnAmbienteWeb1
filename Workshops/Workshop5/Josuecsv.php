<?php

if(empty($argv[1])&&(empty($argv[2]))){
	echo "Datos vacios";
	die;
}else{
	$doc=$argv[1];
	$txt=$argv[2];
	$fp = fopen("$doc", "r");

	$fs = fopen("DATOSIMPUT.txt","w");
fwrite($fs,"");

	if (($fichero = fopen("$doc", "r")) !== FALSE) {
    while (($datos = fgetcsv($fichero, ",")) !== FALSE) {
$nombre = $datos[0];
$apellido =$datos[1];
$phone = $datos[2];
$city =$datos[3];



echo ("$nombre $apellido lives in $city and his phone number is $phone\n");
fwrite($fs,"$nombre $apellido lives in $city and his phone number is $phone\n". PHP_EOL);


 }
}
}





?>

