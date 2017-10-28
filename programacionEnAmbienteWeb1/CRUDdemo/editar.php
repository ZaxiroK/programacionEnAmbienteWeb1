<?php
    if(isset($_GET['editar'])){
        $editar_id = $_GET['editar'];

        $consulta_id= "SELECT * FROM usuarios WHERE id = $editar_id";
        $ejecutar = mysqli_query($conexion, $consulta_id);
        
        $fila = mysqli_fetch_array($ejecutar);

        $usuario = $fila['username'];
        $password = $fila ['password'];
        $email = $fila['email'];

    }
?>
<br/>

<form method= "POST" action= ""> 
    <input type="text" name="user" value= "<?php echo $usuario ?>">
    <input type="password" name="pass" value= "<?php echo $password ?>">
    <input type="email" name="email" value= "<?php echo $email ?>">
    <input type="submit" name="actualizar" value= "Actualizar">
</form>

<?php
        if(isset($_POST['actualizar'])){
            $usuario_actualizar = $_POST['user'];
            $pass_actualizar = $_POST['pass'];
            $email_actualizar = $_POST['email'];

            $actualizar = "UPDATE usuarios SET username = '$usuario_actualizar', password = '$pass_actualizar',  email = '$email_actualizar' WHERE id = $editar_id";
            
            $ejecutar = mysqli_query($conexion, $actualizar);

            if($ejecutar){
                echo "<script>alert('Datos actualizados con exito')</script>";
                echo "<script>window.open('demo.php', '_self')</script>";
            }
        }
        ?>