<?php
$personas = array(
    1 => array(
        "cedula"  => '207110797',
        "nombre" => 'Wilmer',
        "apellido"=> 'Vargas',
        "genero"=> 'masculino'
   ),
   2 => array(
    "cedula"  => '207895456',
    "nombre" => 'Adrian',
    "apellido"=> 'Solis',
    "genero"=> 'masculino'
   ),
   3 => array(
    "cedula"  => '207848586',
    "nombre" => 'Katalina',
    "apellido"=> 'Rodriguez',
    "genero"=> 'femenino'
   ),
   4 => array(
    "cedula"  => '207414542',
    "nombre" => 'Joselin',
    "apellido"=> 'Quiroz',
    "genero"=> 'femenino'
)
   );
?>

<table>
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($personas as $persona) {
        echo "<tr>
                <td>$persona[cedula]</td>
                <td>$persona[nombre]</td>
                <td>$persona[apellido]</td>
                <td>$persona[genero]</td>
            </tr>";
    }
 ?>
        
    </tbody>
</table> 