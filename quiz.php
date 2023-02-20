<?php 

$fruits=array("apple","banna","cherry");
echo array_shift($fruits);

$str="Hello world!";
echo str_replace("World","PHP",$str);
$fruits=array("apple","banna","cherry");
echo count($fruits);

$arr=array("apple","banna","cherry");
echo implode(",",$arr);
echo PHP_EOL;
$str="Hello world";
echo strpos($str,"World");