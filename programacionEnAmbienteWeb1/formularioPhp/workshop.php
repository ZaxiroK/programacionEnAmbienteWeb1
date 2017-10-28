<?php
    $conexion = mysqli_connect("localhost", "root","","bdworkshop") or die ("error de conexion");
    //echo ("conexion realizada con exito");

    if($_POST){
        $usuario = $_POST['username'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];

        $insert = "INSERT INTO user(userName, name, lastname ) VALUES('$usuario','$name','$lastname')";
        
        $ejecutar = mysqli_query($conexion, $insert);

        if($ejecutar){
            echo "<h3>Registrada con exito</h3>";
        }
    }