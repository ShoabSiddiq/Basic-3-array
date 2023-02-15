<?php 

$foods=[
    "Drinks"=>"Pepsi,Fanta,7up,Sprite",
    "Fruits"=>"Orange,Malta,Mango"
];
$keys=array_keys($foods);
print_r($keys)."\n";

$keys=array_values($foods);
print_r($keys)."\n";

$keys=array_keys($foods);
for($i=0;$i<count($keys);$i++){
    $s=$keys[$i];
    echo $foods[$s]."\n";
}
