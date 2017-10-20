<?php 
$conexion = mysqli_connect("localhost", "root","","bdworkshop") or die ("error de conexion");
    
}

if($_POST) {
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];

    $insert = "INSERT INTO users(`username`, `name`, `lastname`) VALUES ('$username','$name', '$lastname')";

    $ejecutar = mysqli_query($conexion, $insert);
    
        if($ejecutar){
            echo "<h3>Registrada con exito</h3>";
        }
        -----------------
    
    //mysqli_query($connection, $sql);
    mysqli_close($conexion);
    header('Location: /utn/pages/?status=success');
  } else {
    header('Location: /utn/pages/?status=error');
  }