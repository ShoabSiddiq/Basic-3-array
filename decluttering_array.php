<?php
$drinks = array('7up', 'pepsi', 'fruto', 'rc cola', 'coca cola', 'lichi drinks', 'dew');

//$extradrinks=array_splice($drinks,2,2);
$newDrinks=array(' speed','tiger','fanta');//add new one in blank space
$extradrinks=array_splice($drinks,2,2,$newDrinks);
print_r($extradrinks);
print_r($drinks);
echo PHP_EOL;



