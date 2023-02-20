<?php 

$s=[
    "12k"=>"Shoab",
    "13k"=>"Karim",
    "15k"=>"Rahim"
];
echo $s["12k"]."\n";
print_r($s);
unset($s['13k']); //unset using for removing data
print_r($s)."\n";
$s=array_slice($s,0,null,true); //array extracting
$foods=[
    "Drinks"=>"Pepsi,Fanta,7up,Sprite",
    "Fruits"=>"Orange,Malta,Mango"
];
echo $foods["Drinks"]."\n\n";

foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}