<?php

$channels =[{
    index = '1',
    canal = '1',
    genero = 'faulas',
    edadRecomendada = '++';
    }
    {
    index = '2',
    canal = '5',
    genero = 'adultos',
    edadRecomendada = '18+';
        
}
    {
    index = '3',
    canal = '6',
    genero = 'comedia',
    edadRecomendada = '16';
        
}
    {
    index = '4',
    canal = '7',
    genero = 'miedo',
    edadRecomendada = '18+';
        
}
];

?>

<table>
    <thead>
        <tr>
            <th>index</th>
            <th>canal</th>
            <th>genero</th>
            <th>edadRecomendada</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($channels as $index => $channel) {?>
        <tr>
        <td><?php echo $index; ?></td>
        <td><?php echo canal; ?></td>
        <td><?php echo genero; ?></td>
        <td><?php echo edadRecomendada; ?></td>
        </tr>
        <?php}?>
    </tbody>
</table> 