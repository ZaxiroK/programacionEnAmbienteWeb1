<!DOCTYPE html>
<?php
    $conexion = mysqli_connect("localhost", "root","","demo") or die ("error de conexion");
    //echo ("conexion realizada con exito");
?>

<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo php & MySqL</title>
</head>
<body>
    <form method="POST" action= "demo.php">
        <label>Usuario: </label>
        <input type="type" name= "user" required><br/>

        <label >Contrasena</label>
        <input type="password" name= "pass" required><br/>

        <label >email</label>
        <input type="email" name= "email" required><br/>

        <input type="submit" name="insert" value= "Insertar Datos">

    </form>

    <?php
        if(isset($_POST['insert'])){
            $usuario = $_POST['user'];
            $password = $_POST['pass'];
            $email = $_POST['email'];

            $insert = "INSERT INTO usuarios(username, password, email ) VALUES('$usuario','$password','$email')";
            
            $ejecutar = mysqli_query($conexion, $insert);

            if($ejecutar){
                echo "<h3>Registrada con exito</h3>";
            }
        }

        ?>
        <br>
        <br>

        <table width="500px" border="2" style= "background-color:#F9F9F9">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contrasenia</th>
            <th>email</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        
        <?php 
            $consulta = "SELECT * FROM usuarios";
            $ejecutar = mysqli_query($conexion, $consulta);
            $i = 0;
            while($fila= mysqli_fetch_array($ejecutar)){
                $id= $fila['id'];
                $usuario= $fila['username'];
                $password= $fila['password'];
                $email= $fila['email'];
                $i++;
            
        ?>
        <tr aling= "center">
            <td><?php echo $id; ?></td>
            <td><?php echo $usuario; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $email; ?></td>
            <td><a href= "demo.php?editar=<?php echo $id; ?>">Editar</a></td>
            <td><a href= "demo.php?borrar=<?php echo $id; ?>">Borrar</a></td>
        </tr>
        <?php 
            }
        ?>
        </table>

        <?php
            if(isset($_GET['editar'])){
                include("editar.php");
            }
        ?>
</body>
</html>
