<?php
    $channels = ['Canal 7', 'Canal 6', 'Canal 11'];
    $descripcion = ['Teletica', 'Repretel', 'Repretel'];
    $direccion = ['www.teletica.com', 'www.cdr/canal6.com', 'www.cdr/canal11.com'];
    
?>

    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Canal</th>
                <th>Información</th>
                <th>Dirección de Web</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($channels as $index => $channel) { ?>
            <tr>
                <td>
                    <?php echo $index; ?>
                </td>
                <td>
                    <?php echo $channel; ?>
                </td>
                <td>
                    <?php echo $descripcion[$index]; ?>
                </td>
                <td>
                   <a href=""><?php echo $direccion[$index]; ?></a> 
                </td>
            </tr>
            <?php } ?>
            </tbody>
    </table>