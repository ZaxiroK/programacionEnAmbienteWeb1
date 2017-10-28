<?php
    $conection = mysqli_connect("localhost", "root","","isw") or die ("error de conexion");
    //echo ("conexion realizada con exito");


    $query = "SELECT * FROM usuarios";
    $execute = mysqli_query($conection, $query);
    $i = 0;

    
    $fp = fopen("isw.txt", "w");
    fwrite($fp,"");

    while($fila= mysqli_fetch_array($execute)){
        $fp = fopen("isw.txt", "a");
        fwrite($fp, $fila["id"]. ','.$fila["name"]. ','.$fila["identificacion"].PHP_EOL);
        fclose($fp);
    }
    mysqli_close($conection);

   
