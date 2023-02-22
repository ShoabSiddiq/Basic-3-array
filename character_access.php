<?php 

$string="Hello World";
echo $string[0];
echo $string[-4];
echo PHP_EOL;
//SUBSTR USE FOR  jtuku word nite chai ta nite prb
echo substr($string,0,5);
echo PHP_EOL;
$length=strlen($string);
echo substr($string,$length-3);
echo PHP_EOL;
echo substr($string,-7,-4);