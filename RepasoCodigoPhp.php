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
            <th>genero</th>
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


<?php
/*
$person =[{
    index = '1',
    cedula = '207110797',
    nombre = 'Wilmer',
    apellido = 'Vargas',
    genero = 'masculino';
    }
    {
    index = '2',
    cedula = '207114797',
    nombre = 'David',
    apellido = 'Solis',
    genero = 'masculino';
        
}
    {
    index = '3',
    cedula = '207111197',
    nombre = 'Lina',
    apellido = 'Inverse',
    genero = 'femenino';
        
}
    {
    index = '4',
    cedula = '207188197',
    nombre = 'Daniela',
    apellido = 'Rodriguez',
    genero = 'femenino';
        
}
];

?>

<table>
    <thead>
        <tr>
            <th>index</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($person as $index => $person) {?>
        <tr>
        <td><?php echo $index; ?></td>
        <td><?php echo cedula; ?></td>
        <td><?php echo nombre; ?></td>
        <td><?php echo apellido; ?></td>
        <td><?php echo genero; ?></td>
        </tr>
        <?php}?>
    </tbody>
</table> 
*/