<?php 
$channels = array(
    1 => array(
         "index"  => '7',
         "nombre" => 'Teletica',
         "visitas"=> '5000'
    ),
    2 => array(
         "index"  => '6',
         "nombre" => 'Repretel',
         "visitas"=> '4900'
    ),
    3 => array(
         "index"  => '33',
         "nombre" => 'XperTV',
         "visitas"=> '1500'
    ),
    4 => array(
         "index"  => '14',
         "nombre" => 'TvNorte',
         "visitas"=> '500'
    )
);
?>

<table>
	<thead>
		<tr>
			<th>Canal</th>
			<th>Nombre</th>
			<th>Visitas</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($channels as $channel) {
				echo "<tr>
						<td>$channel[index]</td>
						<td>$channel[nombre]</td>
						<td>$channel[visitas]</td>
					</tr>";
			}
		 ?>
	</tbody>
</table>