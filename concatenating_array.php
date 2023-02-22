<?php
$drinks = array('7up', 'pepsi', 'fruto', 'rc cola', 'coca cola', 'lichi drinks', 'dew');

$d1=array_slice($drinks,0,3);
$d2=array_slice($drinks,3,null,true);

$newDrinks=array_merge($d1,$d2);
print_r($d1);
print_r($d2);
print_r($newDrinks);