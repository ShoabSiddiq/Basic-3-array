<?php
$n1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);

function squre($n){
    printf("Square of %d is %d\n",$n,$n*$n);
}
array_walk($n1,'squre');
echo PHP_EOL;

function cube($n){
    return $n*$n*$n;
}

function even($n){
    return $n%2==0;
}
$neweven=array_filter($n1,'even');
$newArray=array_map('cube',$n1);
print_r($n1);
print_r($newArray);
print_r($neweven);