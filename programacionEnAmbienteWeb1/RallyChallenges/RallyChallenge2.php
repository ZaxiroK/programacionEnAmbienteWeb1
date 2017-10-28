<?php
 
if(empty($argv[1]) && empty($argv[2])){
    echo "Datos faltantes";
    die;
}else{

    $ruta = $argv[1];
 
   
    $file1 = fopen("$ruta", "r");
    //creo el documento afuera del ciclo para que no me cree n cantidad
    $file2 = fopen("C:/xampp/htdocs/PrograWeb1/RallyChallenges/rally.txt","w");
    fwrite($file2,"");

    if (($exel = fopen("$ruta", "r")) !== FALSE) {
        while (($datos = fgetcsv($exel, ";")) !== FALSE) {
        $nombre = $datos[0];
        $apellido =$datos[1];
        $celular  = $datos[2];
        $lugar  = $datos[3];

       // echo("$nombre $apellido lives in  $lugar and his phone number is $celular\n");
       
        fwrite($file2, "$nombre $apellido lives in  $lugar and his phone number is $celular\n". PHP_EOL);
          

        }
    }
} 