<?php 
$conexion = mysqli_connect("localhost", "root","","bdworkshop") or die ("error de conexion");
    
//}

if($_POST) {
    $userName = $_REQUEST['userName'];
    $name = $_REQUEST['name'];
    $lastName = $_REQUEST['lastName'];

    $insert = "INSERT INTO user(`userName`, `name`, `lastName`) VALUES ('$userName','$name', '$lastname')";

    $ejecutar = mysqli_query($conexion, $insert);
    
        if($ejecutar){
            echo "<h3>Registrada con exito</h3>";
        }
        //-----------------
    
    //mysqli_query($connection, $sql);
    mysqli_close($conexion);
    header('Location: /utn/pages/?status=success');
  } else {
    header('Location: /utn/pages/?status=error');
  }