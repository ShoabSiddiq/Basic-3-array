<?php
$numbers=array(1,4,5,77,2,0,6);
sort($numbers);
print_r($numbers)."\n";

rsort($numbers); //reverse sort
print_r($numbers);

foreach($numbers as $number){
    echo $number."\n";
}

$drinks = array('7'=>'7up','p'=> 'pepsi', 'f'=>'fruto', 'r'=>'rc cola','c'=> 'coca cola', 'l'=>'lichi drinks', 'd'=>'dew');
asort($drinks); // asort using for also attached key in sorting
print_r($drinks);