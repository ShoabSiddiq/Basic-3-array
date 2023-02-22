<?php
$n1 = array(1, 2, 3, 7, 8, 4, 3, 8);
$n2 = array(2, 3, 4, 1, 66, 77, 8, 9);
$common = array_intersect($n1, $n2);
print_r($common) . "\n";

$f1 = array("a" => "apple", "b" => "banana", "c" => "lemon");
$f2 = array("d" => "pineapple", "b" => "malta", "d" => "graps", "c" => "lemon");
$commonf = array_intersect($f1, $f2); //key na milleo execute hbe
print_r($commonf) . "\n";
$commonJ = array_intersect_assoc($f1, $f2); // jodi key match kore then execute hbe
print_r($commonJ);

$diff=array_diff($n1,$n2);//kon gula n2 te ni just se gulai dhekabe
print_r($diff);