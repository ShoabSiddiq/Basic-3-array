<?php 
$string="Hello World,World How are you";
$parts=explode(" ",$string); //explode string k break krtise (,) porjont vangse
print_r($parts);
echo PHP_EOL;
$original=join(" ",$parts); //join or implode same result provide kore
echo $original;

$parts2=str_split($string);
print_r($parts2);
echo PHP_EOL;

$parts3=strtok($string," ,");
while($parts3 !=false){
    echo $parts3."\n";
    $parts3=strtok(" ,");
}