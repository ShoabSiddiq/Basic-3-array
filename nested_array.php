<?php
$foods = [
    'Drinks' => explode(', ', 'Pepsi,Fanta,7up,Sprite'),
    'Fruits' => explode(', ', 'Orange,Malta,Mango'),
    'vegetables' => explode(', ','brinjal,brocoli,carrot,capsicam'),
];
print_r($foods);
array_push($foods['Drinks'],'orange Juice');
print_r($foods)."\n"."\n";

$sample=[
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[5,6,7]]
];
print_r($sample);

echo $sample[3][3][1];
