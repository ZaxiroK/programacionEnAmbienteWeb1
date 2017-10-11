<?php

if($argc <= 1){
    echo  "el valor esta vacio";
    exit;
}

$country = $argv[1];


$cities = [
"costarica" => ['Alajuela','San Jose','Heredia'],
"nicaragua" => ['Managua', 'Leon']
];

if(!array_key_exists($country, $cities)){
    echo "los paises no coinciden";
    exit;
}

print_r($cities[$country]);


