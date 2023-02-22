<?php
$numbers=array(1,4,5,77,2,0,6);
$drinks = array('7'=>'7up','p'=> 'pepsi', 'f'=>'fruto', 'r'=>'rc cola','c'=> 'coca cola', 'l'=>'lichi drinks', 'd'=>'dew');

if(in_array(5,$numbers,true)){
    echo "Number is found"."\n";
} 

$offset=array_search(5,$numbers);//index no of array
echo $offset."\n";

if(key_exists('d',$drinks)){
    echo "key exists";
}else{
    echo "Not exists";
}