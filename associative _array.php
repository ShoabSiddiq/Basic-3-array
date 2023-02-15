<?php 

$s=[
    "12k"=>"Shoab",
    "13k"=>"Karim",
    "15k"=>"Rahim"
];
echo $s["12k"]."\n";

$foods=[
    "Drinks"=>"Pepsi,Fanta,7up,Sprite",
    "Fruits"=>"Orange,Malta,Mango"
];
echo $foods["Drinks"]."\n\n";

foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}